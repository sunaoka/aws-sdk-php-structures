<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RewriteConfig>|null $Rewrites
 */
class UrlRewriteConfig extends Shape
{
    /**
     * @param array{Rewrites?: list<RewriteConfig>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
