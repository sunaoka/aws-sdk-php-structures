<?php

namespace Sunaoka\Aws\Structures\SecretsManager\UpdateSecret;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string|null $ClientRequestToken
 * @property string|null $Description
 * @property string|null $KmsKeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $SecretBinary
 * @property string|null $SecretString
 */
class UpdateSecretRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     ClientRequestToken?: string|null,
     *     Description?: string|null,
     *     KmsKeyId?: string|null,
     *     SecretBinary?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     SecretString?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
