<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property HadoopStepConfig|null $Config
 * @property 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE'|null $ActionOnFailure
 * @property StepStatus|null $Status
 * @property string|null $ExecutionRoleArn
 */
class Step extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Config?: HadoopStepConfig|null,
     *     ActionOnFailure?: 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE'|null,
     *     Status?: StepStatus|null,
     *     ExecutionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
