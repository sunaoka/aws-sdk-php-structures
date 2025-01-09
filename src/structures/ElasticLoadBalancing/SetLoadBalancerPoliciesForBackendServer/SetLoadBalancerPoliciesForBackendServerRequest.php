<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\SetLoadBalancerPoliciesForBackendServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property int $InstancePort
 * @property list<string> $PolicyNames
 */
class SetLoadBalancerPoliciesForBackendServerRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     InstancePort: int,
     *     PolicyNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
