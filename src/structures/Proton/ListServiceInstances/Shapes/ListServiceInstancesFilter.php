<?php

namespace Sunaoka\Aws\Structures\Proton\ListServiceInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'name'|'deploymentStatus'|'templateName'|'serviceName'|'deployedTemplateVersionStatus'|'environmentName'|'lastDeploymentAttemptedAtBefore'|'lastDeploymentAttemptedAtAfter'|'createdAtBefore'|'createdAtAfter' $key
 * @property string $value
 */
class ListServiceInstancesFilter extends Shape
{
    /**
     * @param array{
     *     key?: 'name'|'deploymentStatus'|'templateName'|'serviceName'|'deployedTemplateVersionStatus'|'environmentName'|'lastDeploymentAttemptedAtBefore'|'lastDeploymentAttemptedAtAfter'|'createdAtBefore'|'createdAtAfter',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
