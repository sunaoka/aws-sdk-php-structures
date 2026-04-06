<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommentUpdateContent|null $comment
 * @property CustomUpdateContent|null $custom
 */
class RelatedItemUpdateContent extends Shape
{
    /**
     * @param array{
     *     comment?: CommentUpdateContent|null,
     *     custom?: CustomUpdateContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
