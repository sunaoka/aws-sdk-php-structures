<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsServiceDeploymentConfigurationDeploymentCircuitBreakerDetails $DeploymentCircuitBreaker
 * @property int $MaximumPercent
 * @property int $MinimumHealthyPercent
 */
class AwsEcsServiceDeploymentConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     DeploymentCircuitBreaker?: AwsEcsServiceDeploymentConfigurationDeploymentCircuitBreakerDetails,
     *     MaximumPercent?: int,
     *     MinimumHealthyPercent?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
