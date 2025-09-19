<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationExecutionStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceKey|null $ResourceKey
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'UNKNOWN'|null $State
 * @property list<RemediationExecutionStep>|null $StepDetails
 * @property \Aws\Api\DateTimeResult|null $InvocationTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class RemediationExecutionStatus extends Shape
{
    /**
     * @param array{
     *     ResourceKey?: ResourceKey|null,
     *     State?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'UNKNOWN'|null,
     *     StepDetails?: list<RemediationExecutionStep>|null,
     *     InvocationTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
