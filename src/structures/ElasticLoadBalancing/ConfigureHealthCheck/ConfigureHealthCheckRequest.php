<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ConfigureHealthCheck;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property Shapes\HealthCheck $HealthCheck
 */
class ConfigureHealthCheckRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     HealthCheck: Shapes\HealthCheck
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
