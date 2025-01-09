<?php

namespace Sunaoka\Aws\Structures\Ssm\ListComplianceItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ExecutionTime
 * @property string $ExecutionId
 * @property string $ExecutionType
 */
class ComplianceExecutionSummary extends Shape
{
    /**
     * @param array{
     *     ExecutionTime: \Aws\Api\DateTimeResult,
     *     ExecutionId?: string,
     *     ExecutionType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
