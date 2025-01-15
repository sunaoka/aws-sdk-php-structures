<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PolicyName
 * @property int|null $CookieExpirationPeriod
 */
class LBCookieStickinessPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string|null,
     *     CookieExpirationPeriod?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
