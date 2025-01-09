<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeRuntimeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LaunchPath
 * @property string $Parameters
 * @property int<1, max> $ConcurrentExecutions
 */
class ServerProcess extends Shape
{
    /**
     * @param array{
     *     LaunchPath: string,
     *     Parameters?: string,
     *     ConcurrentExecutions: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
