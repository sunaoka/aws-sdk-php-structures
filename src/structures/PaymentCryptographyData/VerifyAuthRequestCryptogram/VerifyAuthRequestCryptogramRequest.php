<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthRequestCryptogram
 * @property Shapes\CryptogramAuthResponse|null $AuthResponseAttributes
 * @property string $KeyIdentifier
 * @property 'EMV_OPTION_A'|'EMV_OPTION_B' $MajorKeyDerivationMode
 * @property Shapes\SessionKeyDerivation $SessionKeyDerivationAttributes
 * @property string $TransactionData
 */
class VerifyAuthRequestCryptogramRequest extends Request
{
    /**
     * @param array{
     *     AuthRequestCryptogram: string,
     *     AuthResponseAttributes?: Shapes\CryptogramAuthResponse|null,
     *     KeyIdentifier: string,
     *     MajorKeyDerivationMode: 'EMV_OPTION_A'|'EMV_OPTION_B',
     *     SessionKeyDerivationAttributes: Shapes\SessionKeyDerivation,
     *     TransactionData: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
