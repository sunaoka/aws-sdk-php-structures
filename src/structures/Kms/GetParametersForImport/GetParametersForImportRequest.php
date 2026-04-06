<?php

namespace Sunaoka\Aws\Structures\Kms\GetParametersForImport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyId
 * @property 'RSAES_PKCS1_V1_5'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'RSA_AES_KEY_WRAP_SHA_1'|'RSA_AES_KEY_WRAP_SHA_256' $WrappingAlgorithm
 * @property 'RSA_2048'|'RSA_3072'|'RSA_4096' $WrappingKeySpec
 */
class GetParametersForImportRequest extends Request
{
    /**
     * @param array{
     *     KeyId: string,
     *     WrappingAlgorithm: 'RSAES_PKCS1_V1_5'|'RSAES_OAEP_SHA_1'|'RSAES_OAEP_SHA_256'|'RSA_AES_KEY_WRAP_SHA_1'|'RSA_AES_KEY_WRAP_SHA_256',
     *     WrappingKeySpec: 'RSA_2048'|'RSA_3072'|'RSA_4096'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
