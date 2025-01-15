<?php

namespace Sunaoka\Aws\Structures\Iot\StartAuditMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $auditTaskId
 * @property list<string>|null $findingIds
 * @property array<string, list<string>>|null $auditCheckToReasonCodeFilter
 */
class AuditMitigationActionsTaskTarget extends Shape
{
    /**
     * @param array{
     *     auditTaskId?: string|null,
     *     findingIds?: list<string>|null,
     *     auditCheckToReasonCodeFilter?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
