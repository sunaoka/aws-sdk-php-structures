<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelQuantizationConfig $ModelQuantizationConfig
 * @property ModelCompilationConfig $ModelCompilationConfig
 * @property ModelShardingConfig $ModelShardingConfig
 */
class OptimizationConfig extends Shape
{
    /**
     * @param array{
     *     ModelQuantizationConfig?: ModelQuantizationConfig,
     *     ModelCompilationConfig?: ModelCompilationConfig,
     *     ModelShardingConfig?: ModelShardingConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
