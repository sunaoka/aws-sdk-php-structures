<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property 'Case.Created'|'Case.Updated'|'RelatedItem.Created' $type
 * @property 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom'|null $relatedItemType
 * @property \Aws\Api\DateTimeResult $performedTime
 * @property list<AuditEventField> $fields
 * @property AuditEventPerformedBy|null $performedBy
 */
class AuditEvent extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     type: 'Case.Created'|'Case.Updated'|'RelatedItem.Created',
     *     relatedItemType?: 'Contact'|'Comment'|'File'|'Sla'|'ConnectCase'|'Custom'|null,
     *     performedTime: \Aws\Api\DateTimeResult,
     *     fields: list<AuditEventField>,
     *     performedBy?: AuditEventPerformedBy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
