<?php

namespace Sunaoka\Aws\Structures\Payments\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bankCode
 * @property string|null $bankName
 */
class InNetBanking extends Shape
{
    /**
     * @param array{
     *     bankCode: string,
     *     bankName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
