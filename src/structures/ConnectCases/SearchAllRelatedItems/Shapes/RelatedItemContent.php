<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchAllRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContactContent|null $contact
 * @property CommentContent|null $comment
 * @property FileContent|null $file
 * @property SlaContent|null $sla
 * @property ConnectCaseContent|null $connectCase
 * @property CustomContent|null $custom
 */
class RelatedItemContent extends Shape
{
    /**
     * @param array{
     *     contact?: ContactContent|null,
     *     comment?: CommentContent|null,
     *     file?: FileContent|null,
     *     sla?: SlaContent|null,
     *     connectCase?: ConnectCaseContent|null,
     *     custom?: CustomContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
