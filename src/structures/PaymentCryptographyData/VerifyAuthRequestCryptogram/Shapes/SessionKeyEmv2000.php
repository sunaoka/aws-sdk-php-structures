<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationTransactionCounter
 * @property string $PanSequenceNumber
 * @property string $PrimaryAccountNumber
 */
class SessionKeyEmv2000 extends Shape
{
    /**
     * @param array{
     *     ApplicationTransactionCounter: string,
     *     PanSequenceNumber: string,
     *     PrimaryAccountNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
