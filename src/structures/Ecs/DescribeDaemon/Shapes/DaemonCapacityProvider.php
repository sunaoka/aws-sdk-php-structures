<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property int|null $runningCount
 * @property int|null $withoutDaemonCount
 */
class DaemonCapacityProvider extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     runningCount?: int|null,
     *     withoutDaemonCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
