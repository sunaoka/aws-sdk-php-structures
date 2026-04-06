<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelQuantizationConfig|null $ModelQuantizationConfig
 * @property ModelCompilationConfig|null $ModelCompilationConfig
 */
class OptimizationConfig extends Shape
{
    /**
     * @param array{
     *     ModelQuantizationConfig?: ModelQuantizationConfig|null,
     *     ModelCompilationConfig?: ModelCompilationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
