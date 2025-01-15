<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE'|null $ActionOnFailure
 * @property HadoopJarStepConfig $HadoopJarStep
 */
class StepConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ActionOnFailure?: 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE'|null,
     *     HadoopJarStep: HadoopJarStepConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
