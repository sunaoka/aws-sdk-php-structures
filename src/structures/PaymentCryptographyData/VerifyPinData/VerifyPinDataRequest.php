<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DukptAttributes|null $DukptAttributes
 * @property string $EncryptedPinBlock
 * @property string $EncryptionKeyIdentifier
 * @property 'ISO_FORMAT_0'|'ISO_FORMAT_3' $PinBlockFormat
 * @property int<4, 12>|null $PinDataLength
 * @property string $PrimaryAccountNumber
 * @property Shapes\PinVerificationAttributes $VerificationAttributes
 * @property string $VerificationKeyIdentifier
 */
class VerifyPinDataRequest extends Request
{
    /**
     * @param array{
     *     DukptAttributes?: Shapes\DukptAttributes|null,
     *     EncryptedPinBlock: string,
     *     EncryptionKeyIdentifier: string,
     *     PinBlockFormat: 'ISO_FORMAT_0'|'ISO_FORMAT_3',
     *     PinDataLength?: int<4, 12>|null,
     *     PrimaryAccountNumber: string,
     *     VerificationAttributes: Shapes\PinVerificationAttributes,
     *     VerificationKeyIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
