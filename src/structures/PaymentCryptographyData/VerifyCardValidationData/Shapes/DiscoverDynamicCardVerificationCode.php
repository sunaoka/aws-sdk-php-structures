<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationTransactionCounter
 * @property string $CardExpiryDate
 * @property string $UnpredictableNumber
 */
class DiscoverDynamicCardVerificationCode extends Shape
{
    /**
     * @param array{
     *     ApplicationTransactionCounter: string,
     *     CardExpiryDate: string,
     *     UnpredictableNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
