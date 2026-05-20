<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateAuthRequestCryptogram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $TransactionData
 * @property 'EMV_OPTION_A'|'EMV_OPTION_B' $MajorKeyDerivationMode
 * @property Shapes\SessionKeyDerivation $SessionKeyDerivationAttributes
 */
class GenerateAuthRequestCryptogramRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     TransactionData: string,
     *     MajorKeyDerivationMode: 'EMV_OPTION_A'|'EMV_OPTION_B',
     *     SessionKeyDerivationAttributes: Shapes\SessionKeyDerivation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
