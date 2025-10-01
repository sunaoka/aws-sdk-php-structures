<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ContactFilter|null $contact
 * @property CommentFilter|null $comment
 * @property FileFilter|null $file
 * @property SlaFilter|null $sla
 * @property ConnectCaseFilter|null $connectCase
 * @property CustomFilter|null $custom
 */
class RelatedItemTypeFilter extends Shape
{
    /**
     * @param array{
     *     contact?: ContactFilter|null,
     *     comment?: CommentFilter|null,
     *     file?: FileFilter|null,
     *     sla?: SlaFilter|null,
     *     connectCase?: ConnectCaseFilter|null,
     *     custom?: CustomFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
