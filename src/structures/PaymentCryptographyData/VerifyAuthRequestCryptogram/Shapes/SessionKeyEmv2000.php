<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryAccountNumber
 * @property string $PanSequenceNumber
 * @property string $ApplicationTransactionCounter
 */
class SessionKeyEmv2000 extends Shape
{
    /**
     * @param array{
     *     PrimaryAccountNumber: string,
     *     PanSequenceNumber: string,
     *     ApplicationTransactionCounter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
