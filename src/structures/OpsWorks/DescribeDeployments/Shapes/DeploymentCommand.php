<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'install_dependencies'|'update_dependencies'|'update_custom_cookbooks'|'execute_recipes'|'configure'|'setup'|'deploy'|'rollback'|'start'|'stop'|'restart'|'undeploy' $Name
 * @property array<string, list<string>>|null $Args
 */
class DeploymentCommand extends Shape
{
    /**
     * @param array{
     *     Name: 'install_dependencies'|'update_dependencies'|'update_custom_cookbooks'|'execute_recipes'|'configure'|'setup'|'deploy'|'rollback'|'start'|'stop'|'restart'|'undeploy',
     *     Args?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
