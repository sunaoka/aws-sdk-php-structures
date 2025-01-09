<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateTrafficPolicyInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property int $TTL
 * @property string $TrafficPolicyId
 * @property int $TrafficPolicyVersion
 */
class UpdateTrafficPolicyInstanceRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
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
