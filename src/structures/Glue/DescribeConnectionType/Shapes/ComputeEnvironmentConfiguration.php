<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property 'SPARK'|'ATHENA'|'PYTHON' $ComputeEnvironment
 * @property list<'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'> $SupportedAuthenticationTypes
 * @property array<string, Property> $ConnectionOptions
 * @property array<string, string> $ConnectionPropertyNameOverrides
 * @property array<string, string> $ConnectionOptionNameOverrides
 * @property list<string> $ConnectionPropertiesRequiredOverrides
 * @property bool $PhysicalConnectionPropertiesRequired
 */
class ComputeEnvironmentConfiguration extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description: string,
     *     ComputeEnvironment: 'SPARK'|'ATHENA'|'PYTHON',
     *     SupportedAuthenticationTypes: list<'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'>,
     *     ConnectionOptions: array<string, Property>,
     *     ConnectionPropertyNameOverrides: array<string, string>,
     *     ConnectionOptionNameOverrides: array<string, string>,
     *     ConnectionPropertiesRequiredOverrides: list<string>,
     *     PhysicalConnectionPropertiesRequired?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
