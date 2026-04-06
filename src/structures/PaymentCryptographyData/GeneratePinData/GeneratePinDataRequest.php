<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EncryptionKeyIdentifier
 * @property Shapes\PinGenerationAttributes $GenerationAttributes
 * @property string $GenerationKeyIdentifier
 * @property 'ISO_FORMAT_0'|'ISO_FORMAT_3' $PinBlockFormat
 * @property int<4, 12>|null $PinDataLength
 * @property string $PrimaryAccountNumber
 */
class GeneratePinDataRequest extends Request
{
    /**
     * @param array{
     *     EncryptionKeyIdentifier: string,
     *     GenerationAttributes: Shapes\PinGenerationAttributes,
     *     GenerationKeyIdentifier: string,
     *     PinBlockFormat: 'ISO_FORMAT_0'|'ISO_FORMAT_3',
     *     PinDataLength?: int<4, 12>|null,
     *     PrimaryAccountNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
