<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListenerAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 */
class DescribeListenerAttributesRequest extends Request
{
    /**
     * @param array{ListenerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
