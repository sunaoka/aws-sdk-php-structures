<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetContinuousDeploymentPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StagingDistributionDnsNames $StagingDistributionDnsNames
 * @property bool $Enabled
 * @property TrafficConfig|null $TrafficConfig
 */
class ContinuousDeploymentPolicyConfig extends Shape
{
    /**
     * @param array{
     *     StagingDistributionDnsNames: StagingDistributionDnsNames,
     *     Enabled: bool,
     *     TrafficConfig?: TrafficConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
