<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Page
 * @property 'TEXTRACT_BAD_PAGE'|'TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED'|'PAGE_CHARACTERS_EXCEEDED'|'PAGE_SIZE_EXCEEDED'|'INTERNAL_SERVER_ERROR' $ErrorCode
 * @property string $ErrorMessage
 */
class ErrorsListItem extends Shape
{
    /**
     * @param array{
     *     Page?: int,
     *     ErrorCode?: 'TEXTRACT_BAD_PAGE'|'TEXTRACT_PROVISIONED_THROUGHPUT_EXCEEDED'|'PAGE_CHARACTERS_EXCEEDED'|'PAGE_SIZE_EXCEEDED'|'INTERNAL_SERVER_ERROR',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
