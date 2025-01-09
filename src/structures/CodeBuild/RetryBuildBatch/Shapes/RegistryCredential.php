<?php

namespace Sunaoka\Aws\Structures\CodeBuild\RetryBuildBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $credential
 * @property 'SECRETS_MANAGER' $credentialProvider
 */
class RegistryCredential extends Shape
{
    /**
     * @param array{
     *     credential: string,
     *     credentialProvider: 'SECRETS_MANAGER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
