<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property list<AuditEventField> $fields
 * @property AuditEventPerformedBy $performedBy
 * @property \Aws\Api\DateTimeResult $performedTime
 * @property 'Contact'|'Comment'|'File' $relatedItemType
 * @property 'Case.Created'|'Case.Updated'|'RelatedItem.Created' $type
 */
class AuditEvent extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     fields: list<AuditEventField>,
     *     performedBy?: AuditEventPerformedBy,
     *     performedTime: \Aws\Api\DateTimeResult,
     *     relatedItemType?: 'Contact'|'Comment'|'File',
     *     type: 'Case.Created'|'Case.Updated'|'RelatedItem.Created'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
