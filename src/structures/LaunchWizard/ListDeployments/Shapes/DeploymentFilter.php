<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WORKLOAD_NAME'|'DEPLOYMENT_STATUS' $name
 * @property list<string> $values
 */
class DeploymentFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'WORKLOAD_NAME'|'DEPLOYMENT_STATUS',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
