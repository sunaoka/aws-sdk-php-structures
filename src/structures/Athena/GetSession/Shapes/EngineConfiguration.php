<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CoordinatorDpuSize
 * @property int $MaxConcurrentDpus
 * @property int $DefaultExecutorDpuSize
 * @property array<string, string> $AdditionalConfigs
 * @property array<string, string> $SparkProperties
 */
class EngineConfiguration extends Shape
{
    /**
     * @param array{
     *     CoordinatorDpuSize?: int,
     *     MaxConcurrentDpus: int,
     *     DefaultExecutorDpuSize?: int,
     *     AdditionalConfigs?: array<string, string>,
     *     SparkProperties?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
