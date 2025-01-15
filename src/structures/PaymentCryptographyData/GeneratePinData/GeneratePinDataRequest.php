<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GenerationKeyIdentifier
 * @property string $EncryptionKeyIdentifier
 * @property Shapes\PinGenerationAttributes $GenerationAttributes
 * @property int<4, 12>|null $PinDataLength
 * @property string $PrimaryAccountNumber
 * @property 'ISO_FORMAT_0'|'ISO_FORMAT_3'|'ISO_FORMAT_4' $PinBlockFormat
 * @property Shapes\WrappedKey|null $EncryptionWrappedKey
 */
class GeneratePinDataRequest extends Request
{
    /**
     * @param array{
     *     GenerationKeyIdentifier: string,
     *     EncryptionKeyIdentifier: string,
     *     GenerationAttributes: Shapes\PinGenerationAttributes,
     *     PinDataLength?: int<4, 12>|null,
     *     PrimaryAccountNumber: string,
     *     PinBlockFormat: 'ISO_FORMAT_0'|'ISO_FORMAT_3'|'ISO_FORMAT_4',
     *     EncryptionWrappedKey?: Shapes\WrappedKey|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
