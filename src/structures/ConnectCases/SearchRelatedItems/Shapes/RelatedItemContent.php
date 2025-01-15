<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommentContent|null $comment
 * @property ContactContent|null $contact
 * @property FileContent|null $file
 */
class RelatedItemContent extends Shape
{
    /**
     * @param array{
     *     comment?: CommentContent|null,
     *     contact?: ContactContent|null,
     *     file?: FileContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
