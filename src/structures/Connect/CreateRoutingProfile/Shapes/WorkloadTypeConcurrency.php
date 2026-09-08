<?php

namespace Sunaoka\Aws\Structures\Connect\CreateRoutingProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkloadType
 * @property int<1, 10> $Concurrency
 * @property CrossChannelWorkloadBehavior|null $CrossChannelWorkloadBehavior
 */
class WorkloadTypeConcurrency extends Shape
{
    /**
     * @param array{
     *     WorkloadType: string,
     *     Concurrency: int<1, 10>,
     *     CrossChannelWorkloadBehavior?: CrossChannelWorkloadBehavior|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
