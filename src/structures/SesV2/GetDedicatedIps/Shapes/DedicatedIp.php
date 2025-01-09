<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDedicatedIps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ip
 * @property 'IN_PROGRESS'|'DONE' $WarmupStatus
 * @property int $WarmupPercentage
 * @property string $PoolName
 */
class DedicatedIp extends Shape
{
    /**
     * @param array{
     *     Ip: string,
     *     WarmupStatus: 'IN_PROGRESS'|'DONE',
     *     WarmupPercentage: int,
     *     PoolName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
