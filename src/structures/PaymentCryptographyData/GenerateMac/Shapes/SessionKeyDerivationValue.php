<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationCryptogram
 * @property string $ApplicationTransactionCounter
 */
class SessionKeyDerivationValue extends Shape
{
    /**
     * @param array{
     *     ApplicationCryptogram?: string,
     *     ApplicationTransactionCounter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
