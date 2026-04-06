<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommentFilter|null $comment
 * @property ContactFilter|null $contact
 */
class RelatedItemTypeFilter extends Shape
{
    /**
     * @param array{
     *     comment?: CommentFilter|null,
     *     contact?: ContactFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
