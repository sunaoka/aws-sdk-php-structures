<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateTrafficPolicyInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int<0, 2147483647> $TTL
 * @property string $TrafficPolicyId
 * @property int<1, 1000> $TrafficPolicyVersion
 */
class UpdateTrafficPolicyInstanceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     TTL: int<0, 2147483647>,
     *     TrafficPolicyId: string,
     *     TrafficPolicyVersion: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
