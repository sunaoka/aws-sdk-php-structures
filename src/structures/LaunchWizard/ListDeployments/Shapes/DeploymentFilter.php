<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WORKLOAD_NAME'|'DEPLOYMENT_STATUS'|null $name
 * @property list<string>|null $values
 */
class DeploymentFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'WORKLOAD_NAME'|'DEPLOYMENT_STATUS'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
