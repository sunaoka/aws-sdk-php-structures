<?php

namespace Sunaoka\Aws\Structures\SecretsManager\PutSecretValue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string|null $ClientRequestToken
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $SecretBinary
 * @property string|null $SecretString
 * @property list<string>|null $VersionStages
 * @property string|null $RotationToken
 */
class PutSecretValueRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     ClientRequestToken?: string|null,
     *     SecretBinary?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     SecretString?: string|null,
     *     VersionStages?: list<string>|null,
     *     RotationToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
