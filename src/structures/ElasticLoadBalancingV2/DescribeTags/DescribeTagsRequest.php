<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceArns
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{ResourceArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
