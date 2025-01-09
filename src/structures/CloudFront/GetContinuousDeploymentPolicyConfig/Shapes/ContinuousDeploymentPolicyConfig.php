<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetContinuousDeploymentPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StagingDistributionDnsNames $StagingDistributionDnsNames
 * @property bool $Enabled
 * @property TrafficConfig $TrafficConfig
 */
class ContinuousDeploymentPolicyConfig extends Shape
{
    /**
     * @param array{
     *     StagingDistributionDnsNames: StagingDistributionDnsNames,
     *     Enabled: bool,
     *     TrafficConfig?: TrafficConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
