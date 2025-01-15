<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateDedicatedIpPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property list<Shapes\Tag>|null $Tags
 * @property 'STANDARD'|'MANAGED'|null $ScalingMode
 */
class CreateDedicatedIpPoolRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     ScalingMode?: 'STANDARD'|'MANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
