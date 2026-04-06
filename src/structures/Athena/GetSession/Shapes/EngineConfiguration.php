<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1>|null $CoordinatorDpuSize
 * @property int<2, 5000> $MaxConcurrentDpus
 * @property int<1, 1>|null $DefaultExecutorDpuSize
 * @property array<string, string>|null $AdditionalConfigs
 * @property array<string, string>|null $SparkProperties
 */
class EngineConfiguration extends Shape
{
    /**
     * @param array{
     *     CoordinatorDpuSize?: int<1, 1>|null,
     *     MaxConcurrentDpus: int<2, 5000>,
     *     DefaultExecutorDpuSize?: int<1, 1>|null,
     *     AdditionalConfigs?: array<string, string>|null,
     *     SparkProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
