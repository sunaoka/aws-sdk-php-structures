<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IncomingKeyIdentifier
 * @property string $OutgoingKeyIdentifier
 * @property Shapes\TranslationIsoFormats $IncomingTranslationAttributes
 * @property Shapes\TranslationIsoFormats $OutgoingTranslationAttributes
 * @property string $EncryptedPinBlock
 * @property Shapes\DukptDerivationAttributes|null $IncomingDukptAttributes
 * @property Shapes\DukptDerivationAttributes|null $OutgoingDukptAttributes
 * @property Shapes\WrappedKey|null $IncomingWrappedKey
 * @property Shapes\WrappedKey|null $OutgoingWrappedKey
 */
class TranslatePinDataRequest extends Request
{
    /**
     * @param array{
     *     IncomingKeyIdentifier: string,
     *     OutgoingKeyIdentifier: string,
     *     IncomingTranslationAttributes: Shapes\TranslationIsoFormats,
     *     OutgoingTranslationAttributes: Shapes\TranslationIsoFormats,
     *     EncryptedPinBlock: string,
     *     IncomingDukptAttributes?: Shapes\DukptDerivationAttributes|null,
     *     OutgoingDukptAttributes?: Shapes\DukptDerivationAttributes|null,
     *     IncomingWrappedKey?: Shapes\WrappedKey|null,
     *     OutgoingWrappedKey?: Shapes\WrappedKey|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
