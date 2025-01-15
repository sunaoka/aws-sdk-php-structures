<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Page
 * @property 'TEXTRACT_BAD_PAGE'|'TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED'|'PAGE_CHARACTERS_EXCEEDED'|'PAGE_SIZE_EXCEEDED'|'INTERNAL_SERVER_ERROR'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class ErrorsListItem extends Shape
{
    /**
     * @param array{
     *     Page?: int|null,
     *     ErrorCode?: 'TEXTRACT_BAD_PAGE'|'TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED'|'PAGE_CHARACTERS_EXCEEDED'|'PAGE_SIZE_EXCEEDED'|'INTERNAL_SERVER_ERROR'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
