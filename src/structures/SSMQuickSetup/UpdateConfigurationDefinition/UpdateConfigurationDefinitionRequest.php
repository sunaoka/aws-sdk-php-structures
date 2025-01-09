<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateConfigurationDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $LocalDeploymentAdministrationRoleArn
 * @property string $LocalDeploymentExecutionRoleName
 * @property string $ManagerArn
 * @property array<string, string> $Parameters
 * @property string $TypeVersion
 */
class UpdateConfigurationDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     LocalDeploymentAdministrationRoleArn?: string,
     *     LocalDeploymentExecutionRoleName?: string,
     *     ManagerArn: string,
     *     Parameters?: array<string, string>,
     *     TypeVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
