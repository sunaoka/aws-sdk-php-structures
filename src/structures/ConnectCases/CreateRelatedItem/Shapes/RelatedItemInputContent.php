<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommentContent $comment
 * @property Contact $contact
 * @property FileContent $file
 */
class RelatedItemInputContent extends Shape
{
    /**
     * @param array{
     *     comment?: CommentContent,
     *     contact?: Contact,
     *     file?: FileContent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
