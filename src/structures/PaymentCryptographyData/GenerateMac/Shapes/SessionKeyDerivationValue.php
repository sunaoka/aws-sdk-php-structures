<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationCryptogram
 * @property string|null $ApplicationTransactionCounter
 */
class SessionKeyDerivationValue extends Shape
{
    /**
     * @param array{
     *     ApplicationCryptogram?: string|null,
     *     ApplicationTransactionCounter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
