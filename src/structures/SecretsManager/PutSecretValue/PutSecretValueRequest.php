<?php

namespace Sunaoka\Aws\Structures\SecretsManager\PutSecretValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $ClientRequestToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $SecretBinary
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
     *     SecretBinary?: string|resource|\Psr\Http\Message\StreamInterface,
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
