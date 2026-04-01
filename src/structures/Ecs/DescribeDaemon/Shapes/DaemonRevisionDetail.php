<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeDaemon\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property list<DaemonCapacityProvider>|null $capacityProviders
 * @property int|null $totalRunningCount
 */
class DaemonRevisionDetail extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     capacityProviders?: list<DaemonCapacityProvider>|null,
     *     totalRunningCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
