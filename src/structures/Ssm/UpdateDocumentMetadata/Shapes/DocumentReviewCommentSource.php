<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Comment'|null $Type
 * @property string|null $Content
 */
class DocumentReviewCommentSource extends Shape
{
    /**
     * @param array{
     *     Type?: 'Comment'|null,
     *     Content?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
