<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateConfigurationDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $LocalDeploymentAdministrationRoleArn
 * @property string|null $LocalDeploymentExecutionRoleName
 * @property string $ManagerArn
 * @property array<string, string>|null $Parameters
 * @property string|null $TypeVersion
 */
class UpdateConfigurationDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     LocalDeploymentAdministrationRoleArn?: string|null,
     *     LocalDeploymentExecutionRoleName?: string|null,
     *     ManagerArn: string,
     *     Parameters?: array<string, string>|null,
     *     TypeVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
