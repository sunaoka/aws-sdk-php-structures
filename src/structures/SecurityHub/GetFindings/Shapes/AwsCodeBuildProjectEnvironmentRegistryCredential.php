<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Credential
 * @property string $CredentialProvider
 */
class AwsCodeBuildProjectEnvironmentRegistryCredential extends Shape
{
    /**
     * @param array{
     *     Credential?: string,
     *     CredentialProvider?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
