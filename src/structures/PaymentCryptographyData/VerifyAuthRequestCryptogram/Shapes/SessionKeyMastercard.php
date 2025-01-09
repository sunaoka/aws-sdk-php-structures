<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryAccountNumber
 * @property string $PanSequenceNumber
 * @property string $ApplicationTransactionCounter
 * @property string $UnpredictableNumber
 */
class SessionKeyMastercard extends Shape
{
    /**
     * @param array{
     *     PrimaryAccountNumber: string,
     *     PanSequenceNumber: string,
     *     ApplicationTransactionCounter: string,
     *     UnpredictableNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
