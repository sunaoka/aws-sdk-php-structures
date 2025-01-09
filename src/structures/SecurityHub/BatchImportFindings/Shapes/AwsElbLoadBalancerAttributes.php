<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsElbLoadBalancerAccessLog $AccessLog
 * @property AwsElbLoadBalancerConnectionDraining $ConnectionDraining
 * @property AwsElbLoadBalancerConnectionSettings $ConnectionSettings
 * @property AwsElbLoadBalancerCrossZoneLoadBalancing $CrossZoneLoadBalancing
 * @property list<AwsElbLoadBalancerAdditionalAttribute> $AdditionalAttributes
 */
class AwsElbLoadBalancerAttributes extends Shape
{
    /**
     * @param array{
     *     AccessLog?: AwsElbLoadBalancerAccessLog,
     *     ConnectionDraining?: AwsElbLoadBalancerConnectionDraining,
     *     ConnectionSettings?: AwsElbLoadBalancerConnectionSettings,
     *     CrossZoneLoadBalancing?: AwsElbLoadBalancerCrossZoneLoadBalancing,
     *     AdditionalAttributes?: list<AwsElbLoadBalancerAdditionalAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
