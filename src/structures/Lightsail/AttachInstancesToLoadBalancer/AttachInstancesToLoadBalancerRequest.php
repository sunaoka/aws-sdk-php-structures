<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachInstancesToLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $loadBalancerName
 * @property list<string> $instanceNames
 */
class AttachInstancesToLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     loadBalancerName: string,
     *     instanceNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
