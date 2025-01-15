<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancerAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CrossZoneLoadBalancing|null $CrossZoneLoadBalancing
 * @property AccessLog|null $AccessLog
 * @property ConnectionDraining|null $ConnectionDraining
 * @property ConnectionSettings|null $ConnectionSettings
 * @property list<AdditionalAttribute>|null $AdditionalAttributes
 */
class LoadBalancerAttributes extends Shape
{
    /**
     * @param array{
     *     CrossZoneLoadBalancing?: CrossZoneLoadBalancing|null,
     *     AccessLog?: AccessLog|null,
     *     ConnectionDraining?: ConnectionDraining|null,
     *     ConnectionSettings?: ConnectionSettings|null,
     *     AdditionalAttributes?: list<AdditionalAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
