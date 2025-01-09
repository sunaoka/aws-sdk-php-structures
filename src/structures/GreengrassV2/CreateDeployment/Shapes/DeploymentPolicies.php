<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROLLBACK'|'DO_NOTHING' $failureHandlingPolicy
 * @property DeploymentComponentUpdatePolicy $componentUpdatePolicy
 * @property DeploymentConfigurationValidationPolicy $configurationValidationPolicy
 */
class DeploymentPolicies extends Shape
{
    /**
     * @param array{
     *     failureHandlingPolicy?: 'ROLLBACK'|'DO_NOTHING',
     *     componentUpdatePolicy?: DeploymentComponentUpdatePolicy,
     *     configurationValidationPolicy?: DeploymentConfigurationValidationPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
