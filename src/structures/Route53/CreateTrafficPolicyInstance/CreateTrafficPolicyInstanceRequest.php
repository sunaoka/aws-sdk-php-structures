<?php

namespace Sunaoka\Aws\Structures\Route53\CreateTrafficPolicyInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $Name
 * @property int<0, 2147483647> $TTL
 * @property string $TrafficPolicyId
 * @property int<1, 1000> $TrafficPolicyVersion
 */
class CreateTrafficPolicyInstanceRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     Name: string,
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
