<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocumentMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Comment' $Type
 * @property string $Content
 */
class DocumentReviewCommentSource extends Shape
{
    /**
     * @param array{
     *     Type?: 'Comment',
     *     Content?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
