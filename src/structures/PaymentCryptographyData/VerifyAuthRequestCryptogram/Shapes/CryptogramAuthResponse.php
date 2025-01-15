<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CryptogramVerificationArpcMethod1|null $ArpcMethod1
 * @property CryptogramVerificationArpcMethod2|null $ArpcMethod2
 */
class CryptogramAuthResponse extends Shape
{
    /**
     * @param array{
     *     ArpcMethod1?: CryptogramVerificationArpcMethod1|null,
     *     ArpcMethod2?: CryptogramVerificationArpcMethod2|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
