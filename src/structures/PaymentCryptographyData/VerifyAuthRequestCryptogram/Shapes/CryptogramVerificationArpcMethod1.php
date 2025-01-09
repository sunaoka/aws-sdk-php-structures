<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AuthResponseCode
 */
class CryptogramVerificationArpcMethod1 extends Shape
{
    /**
     * @param array{AuthResponseCode: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
