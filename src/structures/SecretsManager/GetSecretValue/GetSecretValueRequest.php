<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetSecretValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $VersionId
 * @property string $VersionStage
 */
class GetSecretValueRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     VersionId?: string,
     *     VersionStage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
