<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\StopKeyUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TR31_B0_BASE_DERIVATION_KEY'|'TR31_C0_CARD_VERIFICATION_KEY'|'TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'|'TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'|'TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'|'TR31_E1_EMV_MKEY_CONFIDENTIALITY'|'TR31_E2_EMV_MKEY_INTEGRITY'|'TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'|'TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'|'TR31_E6_EMV_MKEY_OTHER'|'TR31_K0_KEY_ENCRYPTION_KEY'|'TR31_K1_KEY_BLOCK_PROTECTION_KEY'|'TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'|'TR31_M3_ISO_9797_3_MAC_KEY'|'TR31_M1_ISO_9797_1_MAC_KEY'|'TR31_M6_ISO_9797_5_CMAC_KEY'|'TR31_M7_HMAC_KEY'|'TR31_P0_PIN_ENCRYPTION_KEY'|'TR31_P1_PIN_GENERATION_KEY'|'TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'|'TR31_V1_IBM3624_PIN_VERIFICATION_KEY'|'TR31_V2_VISA_PIN_VERIFICATION_KEY'|'TR31_K2_TR34_ASYMMETRIC_KEY' $KeyUsage
 * @property 'SYMMETRIC_KEY'|'ASYMMETRIC_KEY_PAIR'|'PRIVATE_KEY'|'PUBLIC_KEY' $KeyClass
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384' $KeyAlgorithm
 * @property KeyModesOfUse $KeyModesOfUse
 */
class KeyAttributes extends Shape
{
    /**
     * @param array{
     *     KeyUsage: 'TR31_B0_BASE_DERIVATION_KEY'|'TR31_C0_CARD_VERIFICATION_KEY'|'TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'|'TR31_D1_ASYMMETRIC_KEY_FOR_DATA_ENCRYPTION'|'TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'|'TR31_E1_EMV_MKEY_CONFIDENTIALITY'|'TR31_E2_EMV_MKEY_INTEGRITY'|'TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'|'TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'|'TR31_E6_EMV_MKEY_OTHER'|'TR31_K0_KEY_ENCRYPTION_KEY'|'TR31_K1_KEY_BLOCK_PROTECTION_KEY'|'TR31_K3_ASYMMETRIC_KEY_FOR_KEY_AGREEMENT'|'TR31_M3_ISO_9797_3_MAC_KEY'|'TR31_M1_ISO_9797_1_MAC_KEY'|'TR31_M6_ISO_9797_5_CMAC_KEY'|'TR31_M7_HMAC_KEY'|'TR31_P0_PIN_ENCRYPTION_KEY'|'TR31_P1_PIN_GENERATION_KEY'|'TR31_S0_ASYMMETRIC_KEY_FOR_DIGITAL_SIGNATURE'|'TR31_V1_IBM3624_PIN_VERIFICATION_KEY'|'TR31_V2_VISA_PIN_VERIFICATION_KEY'|'TR31_K2_TR34_ASYMMETRIC_KEY',
     *     KeyClass: 'SYMMETRIC_KEY'|'ASYMMETRIC_KEY_PAIR'|'PRIVATE_KEY'|'PUBLIC_KEY',
     *     KeyAlgorithm: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|'RSA_2048'|'RSA_3072'|'RSA_4096'|'ECC_NIST_P256'|'ECC_NIST_P384',
     *     KeyModesOfUse: KeyModesOfUse
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
