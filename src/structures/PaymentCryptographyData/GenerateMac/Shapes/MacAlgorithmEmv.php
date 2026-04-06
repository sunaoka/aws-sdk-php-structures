<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMV_OPTION_A'|'EMV_OPTION_B' $MajorKeyDerivationMode
 * @property string $PrimaryAccountNumber
 * @property string $PanSequenceNumber
 * @property 'EMV_COMMON_SESSION_KEY'|'EMV2000'|'AMEX'|'MASTERCARD_SESSION_KEY'|'VISA' $SessionKeyDerivationMode
 * @property SessionKeyDerivationValue $SessionKeyDerivationValue
 */
class MacAlgorithmEmv extends Shape
{
    /**
     * @param array{
     *     MajorKeyDerivationMode: 'EMV_OPTION_A'|'EMV_OPTION_B',
     *     PrimaryAccountNumber: string,
     *     PanSequenceNumber: string,
     *     SessionKeyDerivationMode: 'EMV_COMMON_SESSION_KEY'|'EMV2000'|'AMEX'|'MASTERCARD_SESSION_KEY'|'VISA',
     *     SessionKeyDerivationValue: SessionKeyDerivationValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
