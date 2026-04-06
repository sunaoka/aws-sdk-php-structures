<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PanSequenceNumber
 * @property string $PrimaryAccountNumber
 */
class SessionKeyAmex extends Shape
{
    /**
     * @param array{
     *     PanSequenceNumber: string,
     *     PrimaryAccountNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
