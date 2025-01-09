<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property HadoopStepConfig $Config
 * @property 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE' $ActionOnFailure
 * @property StepStatus $Status
 * @property string $ExecutionRoleArn
 */
class Step extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Config?: HadoopStepConfig,
     *     ActionOnFailure?: 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE',
     *     Status?: StepStatus,
     *     ExecutionRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
