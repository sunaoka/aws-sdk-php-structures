<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServerProcess> $ServerProcesses
 * @property int $MaxConcurrentGameSessionActivations
 * @property int $GameSessionActivationTimeoutSeconds
 */
class RuntimeConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerProcesses?: list<ServerProcess>,
     *     MaxConcurrentGameSessionActivations?: int,
     *     GameSessionActivationTimeoutSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
