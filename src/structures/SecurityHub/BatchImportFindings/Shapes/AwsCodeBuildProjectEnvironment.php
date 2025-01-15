<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Certificate
 * @property list<AwsCodeBuildProjectEnvironmentEnvironmentVariablesDetails>|null $EnvironmentVariables
 * @property bool|null $PrivilegedMode
 * @property string|null $ImagePullCredentialsType
 * @property AwsCodeBuildProjectEnvironmentRegistryCredential|null $RegistryCredential
 * @property string|null $Type
 */
class AwsCodeBuildProjectEnvironment extends Shape
{
    /**
     * @param array{
     *     Certificate?: string|null,
     *     EnvironmentVariables?: list<AwsCodeBuildProjectEnvironmentEnvironmentVariablesDetails>|null,
     *     PrivilegedMode?: bool|null,
     *     ImagePullCredentialsType?: string|null,
     *     RegistryCredential?: AwsCodeBuildProjectEnvironmentRegistryCredential|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
