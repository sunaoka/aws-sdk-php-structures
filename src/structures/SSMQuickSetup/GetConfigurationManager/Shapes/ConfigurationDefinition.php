<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\GetConfigurationManager\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $LocalDeploymentAdministrationRoleArn
 * @property string $LocalDeploymentExecutionRoleName
 * @property array<string, string> $Parameters
 * @property string $Type
 * @property string $TypeVersion
 */
class ConfigurationDefinition extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     LocalDeploymentAdministrationRoleArn?: string,
     *     LocalDeploymentExecutionRoleName?: string,
     *     Parameters: array<string, string>,
     *     Type: string,
     *     TypeVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
