<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteSamplingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInput $prompt
 * @property string|null $modelPackageArn
 */
class ComputeLogprobsConfig extends Shape
{
    /**
     * @param array{
     *     prompt: ModelInput,
     *     modelPackageArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
