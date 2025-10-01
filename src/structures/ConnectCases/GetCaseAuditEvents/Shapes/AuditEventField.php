<?php

namespace Sunaoka\Aws\Structures\ConnectCases\GetCaseAuditEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventFieldId
 * @property AuditEventFieldValueUnion|null $oldValue
 * @property AuditEventFieldValueUnion $newValue
 */
class AuditEventField extends Shape
{
    /**
     * @param array{
     *     eventFieldId: string,
     *     oldValue?: AuditEventFieldValueUnion|null,
     *     newValue: AuditEventFieldValueUnion
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
