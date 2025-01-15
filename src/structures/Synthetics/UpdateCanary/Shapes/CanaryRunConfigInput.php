<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<3, 840>|null $TimeoutInSeconds
 * @property int<960, 3008>|null $MemoryInMB
 * @property bool|null $ActiveTracing
 * @property array<string, string>|null $EnvironmentVariables
 */
class CanaryRunConfigInput extends Shape
{
    /**
     * @param array{
     *     TimeoutInSeconds?: int<3, 840>|null,
     *     MemoryInMB?: int<960, 3008>|null,
     *     ActiveTracing?: bool|null,
     *     EnvironmentVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
