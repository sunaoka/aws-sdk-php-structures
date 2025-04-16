<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommentFilter|null $comment
 * @property ContactFilter|null $contact
 * @property FileFilter|null $file
 * @property SlaFilter|null $sla
 */
class RelatedItemTypeFilter extends Shape
{
    /**
     * @param array{
     *     comment?: CommentFilter|null,
     *     contact?: ContactFilter|null,
     *     file?: FileFilter|null,
     *     sla?: SlaFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
