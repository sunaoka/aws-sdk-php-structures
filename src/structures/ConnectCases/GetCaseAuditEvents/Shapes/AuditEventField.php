<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventFieldId
 * @property AuditEventFieldValueUnion $newValue
 * @property AuditEventFieldValueUnion|null $oldValue
 */
class AuditEventField extends Shape
{
    /**
     * @param array{
     *     eventFieldId: string,
     *     newValue: AuditEventFieldValueUnion,
     *     oldValue?: AuditEventFieldValueUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
