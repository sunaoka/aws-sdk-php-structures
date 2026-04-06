<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ImportKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TERMINAL_MAJOR_KEY_VARIANT_00'|'PIN_ENCRYPTION_KEY_VARIANT_28'|'MESSAGE_AUTHENTICATION_KEY_VARIANT_24'|'DATA_ENCRYPTION_KEY_VARIANT_22' $As2805KeyVariant
 * @property KeyModesOfUse $KeyModesOfUse
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521' $KeyAlgorithm
 * @property bool $Exportable
 * @property string $WrappingKeyIdentifier
 * @property string $WrappedKeyCryptogram
 */
class ImportAs2805KeyCryptogram extends Shape
{
    /**
     * @param array{
     *     As2805KeyVariant: 'TERMINAL_MAJOR_KEY_VARIANT_00'|'PIN_ENCRYPTION_KEY_VARIANT_28'|'MESSAGE_AUTHENTICATION_KEY_VARIANT_24'|'DATA_ENCRYPTION_KEY_VARIANT_22',
     *     KeyModesOfUse: KeyModesOfUse,
     *     KeyAlgorithm: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'HMAC_SHA256'|'HMAC_SHA384'|'HMAC_SHA512'|'HMAC_SHA224'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384'|'ECC_NIST_P521',
     *     Exportable: bool,
     *     WrappingKeyIdentifier: string,
     *     WrappedKeyCryptogram: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
