<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogDriver
 * @property array<string, string>|null $Options
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationSecretOptionsDetails>|null $SecretOptions
 */
class AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     LogDriver?: string|null,
     *     Options?: array<string, string>|null,
     *     SecretOptions?: list<AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationSecretOptionsDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
