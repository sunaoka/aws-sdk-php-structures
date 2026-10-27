<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES_128_KEY'|'AES_192_KEY'|'AES_256_KEY'|'SRT_PASSPHRASE'|null $EncryptionSecretType
 * @property EndpointEncryptionSecretConfiguration $EncryptionSecret
 */
class SecretsManagerEndpointEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     EncryptionSecretType?: 'AES_128_KEY'|'AES_192_KEY'|'AES_256_KEY'|'SRT_PASSPHRASE'|null,
     *     EncryptionSecret: EndpointEncryptionSecretConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
