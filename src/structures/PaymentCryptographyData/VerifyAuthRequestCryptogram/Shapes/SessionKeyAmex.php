<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimaryAccountNumber
 * @property string $PanSequenceNumber
 */
class SessionKeyAmex extends Shape
{
    /**
     * @param array{
     *     PrimaryAccountNumber: string,
     *     PanSequenceNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
