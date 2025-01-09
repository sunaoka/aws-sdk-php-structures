<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UnpredictableNumber
 * @property string $PanSequenceNumber
 * @property string $ApplicationTransactionCounter
 */
class CardHolderVerificationValue extends Shape
{
    /**
     * @param array{
     *     UnpredictableNumber: string,
     *     PanSequenceNumber: string,
     *     ApplicationTransactionCounter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
