<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TimeoutInSeconds
 * @property int $MemoryInMB
 * @property bool $ActiveTracing
 * @property array<string, string> $EnvironmentVariables
 */
class CanaryRunConfigInput extends Shape
{
    /**
     * @param array{
     *     TimeoutInSeconds?: int,
     *     MemoryInMB?: int,
     *     ActiveTracing?: bool,
     *     EnvironmentVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
