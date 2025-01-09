<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ModifyLoadBalancerAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CrossZoneLoadBalancing $CrossZoneLoadBalancing
 * @property AccessLog $AccessLog
 * @property ConnectionDraining $ConnectionDraining
 * @property ConnectionSettings $ConnectionSettings
 * @property list<AdditionalAttribute> $AdditionalAttributes
 */
class LoadBalancerAttributes extends Shape
{
    /**
     * @param array{
     *     CrossZoneLoadBalancing?: CrossZoneLoadBalancing,
     *     AccessLog?: AccessLog,
     *     ConnectionDraining?: ConnectionDraining,
     *     ConnectionSettings?: ConnectionSettings,
     *     AdditionalAttributes?: list<AdditionalAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
