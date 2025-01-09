<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExecutionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceKey $ResourceKey
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $State
 * @property list<RemediationExecutionStep> $StepDetails
 * @property \Aws\Api\DateTimeResult $InvocationTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class RemediationExecutionStatus extends Shape
{
    /**
     * @param array{
     *     ResourceKey?: ResourceKey,
     *     State?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     StepDetails?: list<RemediationExecutionStep>,
     *     InvocationTime?: \Aws\Api\DateTimeResult,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
