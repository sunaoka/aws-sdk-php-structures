<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\CreateKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\KeyAttributes $KeyAttributes
 * @property 'CMAC'|'ANSI_X9_24'|'HMAC'|'SHA_1'|null $KeyCheckValueAlgorithm
 * @property bool $Exportable
 * @property bool|null $Enabled
 * @property list<Shapes\Tag>|null $Tags
 * @property 'TR31_B0_BASE_DERIVATION_KEY'|'TR31_C0_CARD_VERIFICATION_KEY'|'TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'|'TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'|'TR31_E1_EMV_MKEY_CONFIDENTIALITY'|'TR31_E2_EMV_MKEY_INTEGRITY'|'TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'|'TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'|'TR31_E6_EMV_MKEY_OTHER'|'TR31_K0_KEY_ENCRYPTION_KEY'|'TR31_K1_KEY_BLOCK_PROTECTION_KEY'|'TR31_M3_ISO_9797_3_MAC_KEY'|'TR31_M1_ISO_9797_1_MAC_KEY'|'TR31_M6_ISO_9797_5_CMAC_KEY'|'TR31_M7_HMAC_KEY'|'TR31_P0_PIN_ENCRYPTION_KEY'|'TR31_P1_PIN_GENERATION_KEY'|'TR31_V1_IBM3624_PIN_VERIFICATION_KEY'|'TR31_V2_VISA_PIN_VERIFICATION_KEY'|null $DeriveKeyUsage
 * @property list<string>|null $ReplicationRegions
 */
class CreateKeyRequest extends Request
{
    /**
     * @param array{
     *     KeyAttributes: Shapes\KeyAttributes,
     *     KeyCheckValueAlgorithm?: 'CMAC'|'ANSI_X9_24'|'HMAC'|'SHA_1'|null,
     *     Exportable: bool,
     *     Enabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DeriveKeyUsage?: 'TR31_B0_BASE_DERIVATION_KEY'|'TR31_C0_CARD_VERIFICATION_KEY'|'TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'|'TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'|'TR31_E1_EMV_MKEY_CONFIDENTIALITY'|'TR31_E2_EMV_MKEY_INTEGRITY'|'TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'|'TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'|'TR31_E6_EMV_MKEY_OTHER'|'TR31_K0_KEY_ENCRYPTION_KEY'|'TR31_K1_KEY_BLOCK_PROTECTION_KEY'|'TR31_M3_ISO_9797_3_MAC_KEY'|'TR31_M1_ISO_9797_1_MAC_KEY'|'TR31_M6_ISO_9797_5_CMAC_KEY'|'TR31_M7_HMAC_KEY'|'TR31_P0_PIN_ENCRYPTION_KEY'|'TR31_P1_PIN_GENERATION_KEY'|'TR31_V1_IBM3624_PIN_VERIFICATION_KEY'|'TR31_V2_VISA_PIN_VERIFICATION_KEY'|null,
     *     ReplicationRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
