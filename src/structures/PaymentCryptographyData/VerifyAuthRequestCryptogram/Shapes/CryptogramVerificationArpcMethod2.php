<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyAuthRequestCryptogram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CardStatusUpdate
 * @property string|null $ProprietaryAuthenticationData
 */
class CryptogramVerificationArpcMethod2 extends Shape
{
    /**
     * @param array{
     *     CardStatusUpdate: string,
     *     ProprietaryAuthenticationData?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
