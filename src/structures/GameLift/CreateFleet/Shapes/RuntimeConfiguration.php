<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServerProcess> $ServerProcesses
 * @property int<1, 2147483647> $MaxConcurrentGameSessionActivations
 * @property int<1, 600> $GameSessionActivationTimeoutSeconds
 */
class RuntimeConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerProcesses?: list<ServerProcess>,
     *     MaxConcurrentGameSessionActivations?: int<1, 2147483647>,
     *     GameSessionActivationTimeoutSeconds?: int<1, 600>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
