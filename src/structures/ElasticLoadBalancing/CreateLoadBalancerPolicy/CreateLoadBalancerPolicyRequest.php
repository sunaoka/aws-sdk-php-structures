<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancerPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property string $PolicyName
 * @property string $PolicyTypeName
 * @property list<Shapes\PolicyAttribute>|null $PolicyAttributes
 */
class CreateLoadBalancerPolicyRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     PolicyName: string,
     *     PolicyTypeName: string,
     *     PolicyAttributes?: list<Shapes\PolicyAttribute>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
