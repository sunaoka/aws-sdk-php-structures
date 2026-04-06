<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EncryptedPinBlock
 * @property Shapes\DukptDerivationAttributes|null $IncomingDukptAttributes
 * @property string $IncomingKeyIdentifier
 * @property Shapes\TranslationIsoFormats $IncomingTranslationAttributes
 * @property Shapes\DukptDerivationAttributes|null $OutgoingDukptAttributes
 * @property string $OutgoingKeyIdentifier
 * @property Shapes\TranslationIsoFormats $OutgoingTranslationAttributes
 */
class TranslatePinDataRequest extends Request
{
    /**
     * @param array{
     *     EncryptedPinBlock: string,
     *     IncomingDukptAttributes?: Shapes\DukptDerivationAttributes|null,
     *     IncomingKeyIdentifier: string,
     *     IncomingTranslationAttributes: Shapes\TranslationIsoFormats,
     *     OutgoingDukptAttributes?: Shapes\DukptDerivationAttributes|null,
     *     OutgoingKeyIdentifier: string,
     *     OutgoingTranslationAttributes: Shapes\TranslationIsoFormats
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
