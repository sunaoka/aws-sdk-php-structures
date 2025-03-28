<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyArn
 * @property KeyAttributes $KeyAttributes
 * @property string $KeyCheckValue
 * @property 'CMAC'|'ANSI_X9_24' $KeyCheckValueAlgorithm
 * @property bool $Enabled
 * @property bool $Exportable
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE' $KeyState
 * @property 'EXTERNAL'|'AWS_PAYMENT_CRYPTOGRAPHY' $KeyOrigin
 * @property \Aws\Api\DateTimeResult $CreateTimestamp
 * @property \Aws\Api\DateTimeResult|null $UsageStartTimestamp
 * @property \Aws\Api\DateTimeResult|null $UsageStopTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeletePendingTimestamp
 * @property \Aws\Api\DateTimeResult|null $DeleteTimestamp
 * @property 'TR31_B0_BASE_DERIVATION_KEY'|'TR31_C0_CARD_VERIFICATION_KEY'|'TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'|'TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'|'TR31_E1_EMV_MKEY_CONFIDENTIALITY'|'TR31_E2_EMV_MKEY_INTEGRITY'|'TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'|'TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'|'TR31_E6_EMV_MKEY_OTHER'|'TR31_K0_KEY_ENCRYPTION_KEY'|'TR31_K1_KEY_BLOCK_PROTECTION_KEY'|'TR31_M3_ISO_9797_3_MAC_KEY'|'TR31_M1_ISO_9797_1_MAC_KEY'|'TR31_M6_ISO_9797_5_CMAC_KEY'|'TR31_M7_HMAC_KEY'|'TR31_P0_PIN_ENCRYPTION_KEY'|'TR31_P1_PIN_GENERATION_KEY'|'TR31_V1_IBM3624_PIN_VERIFICATION_KEY'|'TR31_V2_VISA_PIN_VERIFICATION_KEY'|null $DeriveKeyUsage
 */
class Key extends Shape
{
    /**
     * @param array{
     *     KeyArn: string,
     *     KeyAttributes: KeyAttributes,
     *     KeyCheckValue: string,
     *     KeyCheckValueAlgorithm: 'CMAC'|'ANSI_X9_24',
     *     Enabled: bool,
     *     Exportable: bool,
     *     KeyState: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'DELETE_PENDING'|'DELETE_COMPLETE',
     *     KeyOrigin: 'EXTERNAL'|'AWS_PAYMENT_CRYPTOGRAPHY',
     *     CreateTimestamp: \Aws\Api\DateTimeResult,
     *     UsageStartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UsageStopTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeletePendingTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeleteTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DeriveKeyUsage?: 'TR31_B0_BASE_DERIVATION_KEY'|'TR31_C0_CARD_VERIFICATION_KEY'|'TR31_D0_SYMMETRIC_DATA_ENCRYPTION_KEY'|'TR31_E0_EMV_MKEY_APP_CRYPTOGRAMS'|'TR31_E1_EMV_MKEY_CONFIDENTIALITY'|'TR31_E2_EMV_MKEY_INTEGRITY'|'TR31_E4_EMV_MKEY_DYNAMIC_NUMBERS'|'TR31_E5_EMV_MKEY_CARD_PERSONALIZATION'|'TR31_E6_EMV_MKEY_OTHER'|'TR31_K0_KEY_ENCRYPTION_KEY'|'TR31_K1_KEY_BLOCK_PROTECTION_KEY'|'TR31_M3_ISO_9797_3_MAC_KEY'|'TR31_M1_ISO_9797_1_MAC_KEY'|'TR31_M6_ISO_9797_5_CMAC_KEY'|'TR31_M7_HMAC_KEY'|'TR31_P0_PIN_ENCRYPTION_KEY'|'TR31_P1_PIN_GENERATION_KEY'|'TR31_V1_IBM3624_PIN_VERIFICATION_KEY'|'TR31_V2_VISA_PIN_VERIFICATION_KEY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
