<?php

namespace Sunaoka\Aws\Structures\Iot\StartAuditMitigationActionsTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $auditTaskId
 * @property list<string> $findingIds
 * @property array<string, list<string>> $auditCheckToReasonCodeFilter
 */
class AuditMitigationActionsTaskTarget extends Shape
{
    /**
     * @param array{
     *     auditTaskId?: string,
     *     findingIds?: list<string>,
     *     auditCheckToReasonCodeFilter?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
