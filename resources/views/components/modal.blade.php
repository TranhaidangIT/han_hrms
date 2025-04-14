
@props(['id', 'title', 'size' => null, 'footer' => null])

{{-- Thành phần Modal --}}
{{-- Sử dụng: <x-modal id="modalId" title="Tiêu đề Modal" size="modal-lg">Nội dung Modal</x-modal> --}}

{{-- Cấu trúc HTML của Modal --}}
{{-- 
    - id: Định danh duy nhất cho modal
    - title: Tiêu đề của modal
    - size: Kích thước của modal (tùy chọn, ví dụ: 'modal-lg')
    - footer: Nội dung footer (tùy chọn)
    - slot: Nội dung chính của modal
--}}
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog {{ $size ?? '' }}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @if(isset($footer))
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            @endif
        </div>
    </div>
</div>
