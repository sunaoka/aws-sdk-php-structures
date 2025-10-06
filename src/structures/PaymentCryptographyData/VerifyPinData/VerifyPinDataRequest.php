<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerificationKeyIdentifier
 * @property string $EncryptionKeyIdentifier
 * @property Shapes\PinVerificationAttributes $VerificationAttributes
 * @property string $EncryptedPinBlock
 * @property string|null $PrimaryAccountNumber
 * @property 'ISO_FORMAT_0'|'ISO_FORMAT_1'|'ISO_FORMAT_3'|'ISO_FORMAT_4' $PinBlockFormat
 * @property int<4, 12>|null $PinDataLength
 * @property Shapes\DukptAttributes|null $DukptAttributes
 * @property Shapes\WrappedKey|null $EncryptionWrappedKey
 */
class VerifyPinDataRequest extends Request
{
    /**
     * @param array{
     *     VerificationKeyIdentifier: string,
     *     EncryptionKeyIdentifier: string,
     *     VerificationAttributes: Shapes\PinVerificationAttributes,
     *     EncryptedPinBlock: string,
     *     PrimaryAccountNumber?: string|null,
     *     PinBlockFormat: 'ISO_FORMAT_0'|'ISO_FORMAT_1'|'ISO_FORMAT_3'|'ISO_FORMAT_4',
     *     PinDataLength?: int<4, 12>|null,
     *     DukptAttributes?: Shapes\DukptAttributes|null,
     *     EncryptionWrappedKey?: Shapes\WrappedKey|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
