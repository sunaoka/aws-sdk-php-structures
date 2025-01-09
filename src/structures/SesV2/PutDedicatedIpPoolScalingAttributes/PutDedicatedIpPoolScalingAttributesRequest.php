<?php

namespace Sunaoka\Aws\Structures\SesV2\PutDedicatedIpPoolScalingAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property 'STANDARD'|'MANAGED' $ScalingMode
 */
class PutDedicatedIpPoolScalingAttributesRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     ScalingMode: 'STANDARD'|'MANAGED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
