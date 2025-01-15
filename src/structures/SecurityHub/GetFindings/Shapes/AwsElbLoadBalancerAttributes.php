<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsElbLoadBalancerAccessLog|null $AccessLog
 * @property AwsElbLoadBalancerConnectionDraining|null $ConnectionDraining
 * @property AwsElbLoadBalancerConnectionSettings|null $ConnectionSettings
 * @property AwsElbLoadBalancerCrossZoneLoadBalancing|null $CrossZoneLoadBalancing
 * @property list<AwsElbLoadBalancerAdditionalAttribute>|null $AdditionalAttributes
 */
class AwsElbLoadBalancerAttributes extends Shape
{
    /**
     * @param array{
     *     AccessLog?: AwsElbLoadBalancerAccessLog|null,
     *     ConnectionDraining?: AwsElbLoadBalancerConnectionDraining|null,
     *     ConnectionSettings?: AwsElbLoadBalancerConnectionSettings|null,
     *     CrossZoneLoadBalancing?: AwsElbLoadBalancerCrossZoneLoadBalancing|null,
     *     AdditionalAttributes?: list<AwsElbLoadBalancerAdditionalAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
