<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $TransactionData
 * @property string $AuthRequestCryptogram
 * @property 'EMV_OPTION_A'|'EMV_OPTION_B' $MajorKeyDerivationMode
 * @property Shapes\SessionKeyDerivation $SessionKeyDerivationAttributes
 * @property Shapes\CryptogramAuthResponse $AuthResponseAttributes
 */
class VerifyAuthRequestCryptogramRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     TransactionData: string,
     *     AuthRequestCryptogram: string,
     *     MajorKeyDerivationMode: 'EMV_OPTION_A'|'EMV_OPTION_B',
     *     SessionKeyDerivationAttributes: Shapes\SessionKeyDerivation,
     *     AuthResponseAttributes?: Shapes\CryptogramAuthResponse
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
