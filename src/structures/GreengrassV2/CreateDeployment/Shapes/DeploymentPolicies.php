<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROLLBACK'|'DO_NOTHING'|null $failureHandlingPolicy
 * @property DeploymentComponentUpdatePolicy|null $componentUpdatePolicy
 * @property DeploymentConfigurationValidationPolicy|null $configurationValidationPolicy
 */
class DeploymentPolicies extends Shape
{
    /**
     * @param array{
     *     failureHandlingPolicy?: 'ROLLBACK'|'DO_NOTHING'|null,
     *     componentUpdatePolicy?: DeploymentComponentUpdatePolicy|null,
     *     configurationValidationPolicy?: DeploymentConfigurationValidationPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
