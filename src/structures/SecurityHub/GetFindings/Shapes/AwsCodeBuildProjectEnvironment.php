<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Certificate
 * @property list<AwsCodeBuildProjectEnvironmentEnvironmentVariablesDetails> $EnvironmentVariables
 * @property bool $PrivilegedMode
 * @property string $ImagePullCredentialsType
 * @property AwsCodeBuildProjectEnvironmentRegistryCredential $RegistryCredential
 * @property string $Type
 */
class AwsCodeBuildProjectEnvironment extends Shape
{
    /**
     * @param array{
     *     Certificate?: string,
     *     EnvironmentVariables?: list<AwsCodeBuildProjectEnvironmentEnvironmentVariablesDetails>,
     *     PrivilegedMode?: bool,
     *     ImagePullCredentialsType?: string,
     *     RegistryCredential?: AwsCodeBuildProjectEnvironmentRegistryCredential,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
