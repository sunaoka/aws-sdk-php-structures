<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventFieldId
 * @property AuditEventFieldValueUnion $newValue
 * @property AuditEventFieldValueUnion $oldValue
 */
class AuditEventField extends Shape
{
    /**
     * @param array{
     *     eventFieldId: string,
     *     newValue: AuditEventFieldValueUnion,
     *     oldValue?: AuditEventFieldValueUnion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
