<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Credential
 * @property string|null $CredentialProvider
 */
class AwsCodeBuildProjectEnvironmentRegistryCredential extends Shape
{
    /**
     * @param array{
     *     Credential?: string|null,
     *     CredentialProvider?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
