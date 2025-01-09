<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerificationKeyIdentifier
 * @property string $EncryptionKeyIdentifier
 * @property Shapes\PinVerificationAttributes $VerificationAttributes
 * @property string $EncryptedPinBlock
 * @property string $PrimaryAccountNumber
 * @property 'ISO_FORMAT_0'|'ISO_FORMAT_3'|'ISO_FORMAT_4' $PinBlockFormat
 * @property int<4, 12> $PinDataLength
 * @property Shapes\DukptAttributes $DukptAttributes
 * @property Shapes\WrappedKey $EncryptionWrappedKey
 */
class VerifyPinDataRequest extends Request
{
    /**
     * @param array{
     *     VerificationKeyIdentifier: string,
     *     EncryptionKeyIdentifier: string,
     *     VerificationAttributes: Shapes\PinVerificationAttributes,
     *     EncryptedPinBlock: string,
     *     PrimaryAccountNumber: string,
     *     PinBlockFormat: 'ISO_FORMAT_0'|'ISO_FORMAT_3'|'ISO_FORMAT_4',
     *     PinDataLength?: int<4, 12>,
     *     DukptAttributes?: Shapes\DukptAttributes,
     *     EncryptionWrappedKey?: Shapes\WrappedKey
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
