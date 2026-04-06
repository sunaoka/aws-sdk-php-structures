<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationTransactionCounter
 * @property string $PanSequenceNumber
 * @property string $UnpredictableNumber
 */
class CardHolderVerificationValue extends Shape
{
    /**
     * @param array{
     *     ApplicationTransactionCounter: string,
     *     PanSequenceNumber: string,
     *     UnpredictableNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
