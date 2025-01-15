<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property string|null $CookieName
 */
class AppCookieStickinessPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     CookieName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
