<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\CreateConfigurationManager\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LocalDeploymentAdministrationRoleArn
 * @property string|null $LocalDeploymentExecutionRoleName
 * @property array<string, string> $Parameters
 * @property string $Type
 * @property string|null $TypeVersion
 */
class ConfigurationDefinitionInput extends Shape
{
    /**
     * @param array{
     *     LocalDeploymentAdministrationRoleArn?: string|null,
     *     LocalDeploymentExecutionRoleName?: string|null,
     *     Parameters: array<string, string>,
     *     Type: string,
     *     TypeVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
