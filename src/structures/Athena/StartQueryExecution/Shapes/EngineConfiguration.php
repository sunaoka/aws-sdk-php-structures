<?php

namespace Sunaoka\Aws\Structures\Athena\StartQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1>|null $CoordinatorDpuSize
 * @property int<2, 5000>|null $MaxConcurrentDpus
 * @property int<1, 1>|null $DefaultExecutorDpuSize
 * @property array<string, string>|null $AdditionalConfigs
 * @property array<string, string>|null $SparkProperties
 * @property list<Classification>|null $Classifications
 */
class EngineConfiguration extends Shape
{
    /**
     * @param array{
     *     CoordinatorDpuSize?: int<1, 1>|null,
     *     MaxConcurrentDpus?: int<2, 5000>|null,
     *     DefaultExecutorDpuSize?: int<1, 1>|null,
     *     AdditionalConfigs?: array<string, string>|null,
     *     SparkProperties?: array<string, string>|null,
     *     Classifications?: list<Classification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
