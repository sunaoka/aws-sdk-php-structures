<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDedicatedIpPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property list<Shapes\Tag> $Tags
 */
class CreateDedicatedIpPoolRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
