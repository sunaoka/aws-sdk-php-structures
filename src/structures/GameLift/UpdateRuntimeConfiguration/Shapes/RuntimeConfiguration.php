<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateRuntimeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServerProcess>|null $ServerProcesses
 * @property int<1, 2147483647>|null $MaxConcurrentGameSessionActivations
 * @property int<1, 600>|null $GameSessionActivationTimeoutSeconds
 */
class RuntimeConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerProcesses?: list<ServerProcess>|null,
     *     MaxConcurrentGameSessionActivations?: int<1, 2147483647>|null,
     *     GameSessionActivationTimeoutSeconds?: int<1, 600>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
