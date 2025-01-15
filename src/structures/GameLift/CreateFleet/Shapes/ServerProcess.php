<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchPath
 * @property string|null $Parameters
 * @property int<1, max> $ConcurrentExecutions
 */
class ServerProcess extends Shape
{
    /**
     * @param array{
     *     LaunchPath: string,
     *     Parameters?: string|null,
     *     ConcurrentExecutions: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
