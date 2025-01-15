<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfigurationManager\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $LocalDeploymentAdministrationRoleArn
 * @property string|null $LocalDeploymentExecutionRoleName
 * @property array<string, string> $Parameters
 * @property string $Type
 * @property string|null $TypeVersion
 */
class ConfigurationDefinition extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
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
