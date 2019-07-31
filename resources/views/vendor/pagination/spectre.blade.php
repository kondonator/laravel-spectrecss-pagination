@if ($paginator->hasPages())
  <ul class="pagination" role="navigation">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
        <a href="#" aria-hidden="true" tabindex="-1">@lang('pagination.previous')</a>
      </li>
    @else
      <li class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@lang('pagination.previous')</a>
      </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
      {{-- "Three Dots" Separator --}}
      @if (is_string($element))
        <li class="page-item disabled" aria-disabled="true">
          <span class="page-link">{{ $element }}</span>
        </li>
      @endif

      {{-- Array Of Links --}}
      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <li class="page-item active" aria-current="page">
              <a href="#" aria-hidden="true" tabindex="-1">{{ $page }}</a>
            </li>
          @else
            <li class="page-item">
              <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
          @endif
        @endforeach
      @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li class="page-item">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('pagination.next')</a>
      </li>
    @else
      <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
        <a href="#" aria-hidden="true" tabindex="-1">@lang('pagination.next')</a>
      </li>
    @endif
  </ul>
@endif
