<?php

namespace Sunaoka\Aws\Structures\OpsWorks\AttachElasticLoadBalancer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticLoadBalancerName
 * @property string $LayerId
 */
class AttachElasticLoadBalancerRequest extends Request
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
