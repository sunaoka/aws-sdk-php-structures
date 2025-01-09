<?php

namespace Sunaoka\Aws\Structures\Route53\CreateTrafficPolicyInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $Name
 * @property int $TTL
 * @property string $TrafficPolicyId
 * @property int $TrafficPolicyVersion
 */
class CreateTrafficPolicyInstanceRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     Name: string,
     *     TTL: int,
     *     TrafficPolicyId: string,
     *     TrafficPolicyVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
