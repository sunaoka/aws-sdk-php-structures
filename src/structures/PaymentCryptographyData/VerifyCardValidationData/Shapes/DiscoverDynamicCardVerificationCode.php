<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CardExpiryDate
 * @property string $UnpredictableNumber
 * @property string $ApplicationTransactionCounter
 */
class DiscoverDynamicCardVerificationCode extends Shape
{
    /**
     * @param array{
     *     CardExpiryDate: string,
     *     UnpredictableNumber: string,
     *     ApplicationTransactionCounter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
