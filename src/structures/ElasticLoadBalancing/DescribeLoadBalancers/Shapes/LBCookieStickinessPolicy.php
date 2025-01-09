<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PolicyName
 * @property int $CookieExpirationPeriod
 */
class LBCookieStickinessPolicy extends Shape
{
    /**
     * @param array{
     *     PolicyName?: string,
     *     CookieExpirationPeriod?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
