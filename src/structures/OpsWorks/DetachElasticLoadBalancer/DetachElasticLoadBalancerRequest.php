<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DetachElasticLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticLoadBalancerName
 * @property string $LayerId
 */
class DetachElasticLoadBalancerRequest extends Request
{
    /**
     * @param array{
     *     ElasticLoadBalancerName: string,
     *     LayerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
