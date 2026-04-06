<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationTransactionCounter
 * @property string $PanSequenceNumber
 * @property string $PrimaryAccountNumber
 * @property string $UnpredictableNumber
 */
class SessionKeyMastercard extends Shape
{
    /**
     * @param array{
     *     ApplicationTransactionCounter: string,
     *     PanSequenceNumber: string,
     *     PrimaryAccountNumber: string,
     *     UnpredictableNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
