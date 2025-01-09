<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UnpredictableNumber
 * @property string $PanSequenceNumber
 * @property string $ApplicationTransactionCounter
 * @property string $TrackData
 */
class DynamicCardVerificationCode extends Shape
{
    /**
     * @param array{
     *     UnpredictableNumber: string,
     *     PanSequenceNumber: string,
     *     ApplicationTransactionCounter: string,
     *     TrackData: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
