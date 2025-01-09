<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateRuntimeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchPath
 * @property string $Parameters
 * @property int $ConcurrentExecutions
 */
class ServerProcess extends Shape
{
    /**
     * @param array{
     *     LaunchPath: string,
     *     Parameters?: string,
     *     ConcurrentExecutions: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
