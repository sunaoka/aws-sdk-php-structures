<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationTransactionCounter
 * @property string $PanSequenceNumber
 * @property string $TrackData
 * @property string $UnpredictableNumber
 */
class DynamicCardVerificationCode extends Shape
{
    /**
     * @param array{
     *     ApplicationTransactionCounter: string,
     *     PanSequenceNumber: string,
     *     TrackData: string,
     *     UnpredictableNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
