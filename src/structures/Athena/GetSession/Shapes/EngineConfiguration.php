<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1> $CoordinatorDpuSize
 * @property int<2, 5000> $MaxConcurrentDpus
 * @property int<1, 1> $DefaultExecutorDpuSize
 * @property array<string, string> $AdditionalConfigs
 * @property array<string, string> $SparkProperties
 */
class EngineConfiguration extends Shape
{
    /**
     * @param array{
     *     CoordinatorDpuSize?: int<1, 1>,
     *     MaxConcurrentDpus: int<2, 5000>,
     *     DefaultExecutorDpuSize?: int<1, 1>,
     *     AdditionalConfigs?: array<string, string>,
     *     SparkProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
