<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Contact|null $contact
 * @property CommentContent|null $comment
 * @property FileContent|null $file
 * @property SlaInputContent|null $sla
 * @property ConnectCaseInputContent|null $connectCase
 * @property CustomInputContent|null $custom
 */
class RelatedItemInputContent extends Shape
{
    /**
     * @param array{
     *     contact?: Contact|null,
     *     comment?: CommentContent|null,
     *     file?: FileContent|null,
     *     sla?: SlaInputContent|null,
     *     connectCase?: ConnectCaseInputContent|null,
     *     custom?: CustomInputContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
