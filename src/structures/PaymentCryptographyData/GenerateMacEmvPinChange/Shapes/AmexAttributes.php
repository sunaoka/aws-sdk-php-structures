<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMacEmvPinChange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EMV_OPTION_A'|'EMV_OPTION_B' $MajorKeyDerivationMode
 * @property string $PrimaryAccountNumber
 * @property string $PanSequenceNumber
 * @property string $ApplicationTransactionCounter
 * @property string $AuthorizationRequestKeyIdentifier
 * @property CurrentPinAttributes $CurrentPinAttributes
 */
class AmexAttributes extends Shape
{
    /**
     * @param array{
     *     MajorKeyDerivationMode: 'EMV_OPTION_A'|'EMV_OPTION_B',
     *     PrimaryAccountNumber: string,
     *     PanSequenceNumber: string,
     *     ApplicationTransactionCounter: string,
     *     AuthorizationRequestKeyIdentifier: string,
     *     CurrentPinAttributes?: CurrentPinAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
