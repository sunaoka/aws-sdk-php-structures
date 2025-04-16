<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventId
 * @property list<AuditEventField> $fields
 * @property AuditEventPerformedBy|null $performedBy
 * @property \Aws\Api\DateTimeResult $performedTime
 * @property 'Contact'|'Comment'|'File'|'Sla'|null $relatedItemType
 * @property 'Case.Created'|'Case.Updated'|'RelatedItem.Created' $type
 */
class AuditEvent extends Shape
{
    /**
     * @param array{
     *     eventId: string,
     *     fields: list<AuditEventField>,
     *     performedBy?: AuditEventPerformedBy|null,
     *     performedTime: \Aws\Api\DateTimeResult,
     *     relatedItemType?: 'Contact'|'Comment'|'File'|'Sla'|null,
     *     type: 'Case.Created'|'Case.Updated'|'RelatedItem.Created'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
