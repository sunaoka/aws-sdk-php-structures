<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommentFilter $comment
 * @property ContactFilter $contact
 * @property FileFilter $file
 */
class RelatedItemTypeFilter extends Shape
{
    /**
     * @param array{
     *     comment?: CommentFilter,
     *     contact?: ContactFilter,
     *     file?: FileFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
