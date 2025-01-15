<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetSecretValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string|null $VersionId
 * @property string|null $VersionStage
 */
class GetSecretValueRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     VersionId?: string|null,
     *     VersionStage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
