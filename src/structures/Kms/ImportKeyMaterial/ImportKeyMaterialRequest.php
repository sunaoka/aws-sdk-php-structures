<?php

namespace Sunaoka\Aws\Structures\Kms\ImportKeyMaterial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property string $ImportToken
 * @property string $EncryptedKeyMaterial
 * @property \Aws\Api\DateTimeResult $ValidTo
 * @property 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE' $ExpirationModel
 */
class ImportKeyMaterialRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     ImportToken: string,
     *     EncryptedKeyMaterial: string,
     *     ValidTo?: \Aws\Api\DateTimeResult,
     *     ExpirationModel?: 'KEY_MATERIAL_EXPIRES'|'KEY_MATERIAL_DOES_NOT_EXPIRE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
