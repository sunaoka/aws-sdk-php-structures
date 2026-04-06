<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE'|null $ActionOnFailure
 * @property HadoopJarStepConfig $HadoopJarStep
 * @property StepMonitoringConfiguration|null $StepMonitoringConfiguration
 */
class StepConfig extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ActionOnFailure?: 'TERMINATE_JOB_FLOW'|'TERMINATE_CLUSTER'|'CANCEL_AND_WAIT'|'CONTINUE'|null,
     *     HadoopJarStep: HadoopJarStepConfig,
     *     StepMonitoringConfiguration?: StepMonitoringConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
