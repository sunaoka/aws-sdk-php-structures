<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateDedicatedIpPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property list<Shapes\Tag> $Tags
 * @property 'STANDARD'|'MANAGED' $ScalingMode
 */
class CreateDedicatedIpPoolRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     Tags?: list<Shapes\Tag>,
     *     ScalingMode?: 'STANDARD'|'MANAGED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
