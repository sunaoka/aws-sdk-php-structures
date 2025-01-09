<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GenerationKeyIdentifier
 * @property string $EncryptionKeyIdentifier
 * @property Shapes\PinGenerationAttributes $GenerationAttributes
 * @property int $PinDataLength
 * @property string $PrimaryAccountNumber
 * @property 'ISO_FORMAT_0'|'ISO_FORMAT_3'|'ISO_FORMAT_4' $PinBlockFormat
 * @property Shapes\WrappedKey $EncryptionWrappedKey
 */
class GeneratePinDataRequest extends Request
{
    /**
     * @param array{
     *     GenerationKeyIdentifier: string,
     *     EncryptionKeyIdentifier: string,
     *     GenerationAttributes: Shapes\PinGenerationAttributes,
     *     PinDataLength?: int,
     *     PrimaryAccountNumber: string,
     *     PinBlockFormat: 'ISO_FORMAT_0'|'ISO_FORMAT_3'|'ISO_FORMAT_4',
     *     EncryptionWrappedKey?: Shapes\WrappedKey
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
