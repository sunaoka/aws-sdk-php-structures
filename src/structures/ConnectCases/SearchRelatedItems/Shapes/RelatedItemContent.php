<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommentContent $comment
 * @property ContactContent $contact
 * @property FileContent $file
 */
class RelatedItemContent extends Shape
{
    /**
     * @param array{
     *     comment?: CommentContent,
     *     contact?: ContactContent,
     *     file?: FileContent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
