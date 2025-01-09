<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Image
 * @property array<string, string> $OverrideEnvironment
 */
class ModelShardingConfig extends Shape
{
    /**
     * @param array{
     *     Image?: string,
     *     OverrideEnvironment?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
