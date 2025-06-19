<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetParametersForExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TR34_KEY_BLOCK'|'TR31_KEY_BLOCK'|'ROOT_PUBLIC_KEY_CERTIFICATE'|'TRUSTED_PUBLIC_KEY_CERTIFICATE'|'KEY_CRYPTOGRAM' $KeyMaterialType
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521' $SigningKeyAlgorithm
 */
class GetParametersForExportRequest extends Request
{
    /**
     * @param array{
     *     KeyMaterialType: 'TR34_KEY_BLOCK'|'TR31_KEY_BLOCK'|'ROOT_PUBLIC_KEY_CERTIFICATE'|'TRUSTED_PUBLIC_KEY_CERTIFICATE'|'KEY_CRYPTOGRAM',
     *     SigningKeyAlgorithm: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
