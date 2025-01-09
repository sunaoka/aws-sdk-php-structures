<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ParentHyperParameterTuningJob> $ParentHyperParameterTuningJobs
 * @property 'IdenticalDataAndAlgorithm'|'TransferLearning' $WarmStartType
 */
class HyperParameterTuningJobWarmStartConfig extends Shape
{
    /**
     * @param array{
     *     ParentHyperParameterTuningJobs: list<ParentHyperParameterTuningJob>,
     *     WarmStartType: 'IdenticalDataAndAlgorithm'|'TransferLearning'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
