<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IncomingKeyIdentifier
 * @property string $OutgoingKeyIdentifier
 * @property Shapes\TranslationIsoFormats $IncomingTranslationAttributes
 * @property Shapes\TranslationIsoFormats $OutgoingTranslationAttributes
 * @property string $EncryptedPinBlock
 * @property Shapes\DukptDerivationAttributes $IncomingDukptAttributes
 * @property Shapes\DukptDerivationAttributes $OutgoingDukptAttributes
 * @property Shapes\WrappedKey $IncomingWrappedKey
 * @property Shapes\WrappedKey $OutgoingWrappedKey
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
     *     IncomingDukptAttributes?: Shapes\DukptDerivationAttributes,
     *     OutgoingDukptAttributes?: Shapes\DukptDerivationAttributes,
     *     IncomingWrappedKey?: Shapes\WrappedKey,
     *     OutgoingWrappedKey?: Shapes\WrappedKey
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
