<?php

namespace Sunaoka\Aws\Structures\Kms\ImportKeyMaterial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $ImportToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $EncryptedKeyMaterial
 * @property \Aws\Api\DateTimeResult|null $ValidTo
 * @property 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'|null $ExpirationModel
 */
class ImportKeyMaterialRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     ImportToken: string|resource|\Psr\Http\Message\StreamInterface,
     *     EncryptedKeyMaterial: string|resource|\Psr\Http\Message\StreamInterface,
     *     ValidTo?: \Aws\Api\DateTimeResult|null,
     *     ExpirationModel?: 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
