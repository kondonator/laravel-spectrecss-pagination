@if ($paginator->hasPages())
  <ul class="pagination" role="navigation">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <li class="page-item disabled" aria-disabled="true">
        <a href="#" tabindex="-1">@lang('pagination.previous')</a>
      </li>
    @else
      <li class="page-item">
        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
      </li>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <li class="page-item">
        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
      </li>
    @else
      <li class="page-item disabled" aria-disabled="true">
        <a href="#" tabindex="-1">@lang('pagination.next')</a>
      </li>
    @endif
  </ul>
@endif
