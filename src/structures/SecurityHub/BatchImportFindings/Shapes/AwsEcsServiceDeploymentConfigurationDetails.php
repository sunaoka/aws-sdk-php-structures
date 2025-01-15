<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsServiceDeploymentConfigurationDeploymentCircuitBreakerDetails|null $DeploymentCircuitBreaker
 * @property int|null $MaximumPercent
 * @property int|null $MinimumHealthyPercent
 */
class AwsEcsServiceDeploymentConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     DeploymentCircuitBreaker?: AwsEcsServiceDeploymentConfigurationDeploymentCircuitBreakerDetails|null,
     *     MaximumPercent?: int|null,
     *     MinimumHealthyPercent?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
