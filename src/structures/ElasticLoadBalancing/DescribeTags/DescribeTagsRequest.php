<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LoadBalancerNames
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{LoadBalancerNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
