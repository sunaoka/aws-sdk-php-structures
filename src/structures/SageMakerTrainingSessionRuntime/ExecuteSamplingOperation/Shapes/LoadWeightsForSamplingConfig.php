<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteSamplingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelPackageArn
 */
class LoadWeightsForSamplingConfig extends Shape
{
    /**
     * @param array{modelPackageArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
