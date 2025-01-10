<?php

namespace Sunaoka\Aws\Structures\SecretsManager\UpdateSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $ClientRequestToken
 * @property string $Description
 * @property string $KmsKeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $SecretBinary
 * @property string $SecretString
 */
class UpdateSecretRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     ClientRequestToken?: string,
     *     Description?: string,
     *     KmsKeyId?: string,
     *     SecretBinary?: string|resource|\Psr\Http\Message\StreamInterface,
     *     SecretString?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
