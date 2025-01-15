<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ExecutionTime
 * @property string|null $ExecutionId
 * @property string|null $ExecutionType
 */
class ComplianceExecutionSummary extends Shape
{
    /**
     * @param array{
     *     ExecutionTime: \Aws\Api\DateTimeResult,
     *     ExecutionId?: string|null,
     *     ExecutionType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
