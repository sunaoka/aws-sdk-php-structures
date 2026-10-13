<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelPackageArn
 * @property bool $loadOptimizer
 */
class LoadStateConfig extends Shape
{
    /**
     * @param array{
     *     modelPackageArn: string,
     *     loadOptimizer: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
