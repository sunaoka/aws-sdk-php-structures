<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommentContent|null $comment
 * @property Contact|null $contact
 */
class RelatedItemInputContent extends Shape
{
    /**
     * @param array{
     *     comment?: CommentContent|null,
     *     contact?: Contact|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
