<?php

namespace Sunaoka\Aws\Structures\Kms\ImportKeyMaterial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string|resource|\Psr\Http\Message\StreamInterface $ImportToken
 * @property string|resource|\Psr\Http\Message\StreamInterface $EncryptedKeyMaterial
 * @property \Aws\Api\DateTimeResult|null $ValidTo
 * @property 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'|null $ExpirationModel
 * @property 'NEW_KEY_MATERIAL'|'EXISTING_KEY_MATERIAL'|null $ImportType
 * @property string|null $KeyMaterialDescription
 * @property string|null $KeyMaterialId
 */
class ImportKeyMaterialRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     ImportToken: string|resource|\Psr\Http\Message\StreamInterface,
     *     EncryptedKeyMaterial: string|resource|\Psr\Http\Message\StreamInterface,
     *     ValidTo?: \Aws\Api\DateTimeResult|null,
     *     ExpirationModel?: 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'|null,
     *     ImportType?: 'NEW_KEY_MATERIAL'|'EXISTING_KEY_MATERIAL'|null,
     *     KeyMaterialDescription?: string|null,
     *     KeyMaterialId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
