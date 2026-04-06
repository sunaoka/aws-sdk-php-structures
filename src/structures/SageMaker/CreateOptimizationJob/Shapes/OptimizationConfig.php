<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelQuantizationConfig|null $ModelQuantizationConfig
 * @property ModelCompilationConfig|null $ModelCompilationConfig
 * @property ModelShardingConfig|null $ModelShardingConfig
 */
class OptimizationConfig extends Shape
{
    /**
     * @param array{
     *     ModelQuantizationConfig?: ModelQuantizationConfig|null,
     *     ModelCompilationConfig?: ModelCompilationConfig|null,
     *     ModelShardingConfig?: ModelShardingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
