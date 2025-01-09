<?php

namespace Sunaoka\Aws\Structures\SecretsManager\PutSecretValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $ClientRequestToken
 * @property string $SecretBinary
 * @property string $SecretString
 * @property list<string> $VersionStages
 * @property string $RotationToken
 */
class PutSecretValueRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     ClientRequestToken?: string,
     *     SecretBinary?: string,
     *     SecretString?: string,
     *     VersionStages?: list<string>,
     *     RotationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
