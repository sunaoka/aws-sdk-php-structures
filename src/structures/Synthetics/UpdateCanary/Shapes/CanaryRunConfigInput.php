<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3, 840> $TimeoutInSeconds
 * @property int<960, 3008> $MemoryInMB
 * @property bool $ActiveTracing
 * @property array<string, string> $EnvironmentVariables
 */
class CanaryRunConfigInput extends Shape
{
    /**
     * @param array{
     *     TimeoutInSeconds?: int<3, 840>,
     *     MemoryInMB?: int<960, 3008>,
     *     ActiveTracing?: bool,
     *     EnvironmentVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
