<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogDriver
 * @property array<string, string> $Options
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationSecretOptionsDetails> $SecretOptions
 */
class AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     LogDriver?: string,
     *     Options?: array<string, string>,
     *     SecretOptions?: list<AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationSecretOptionsDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
