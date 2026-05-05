<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $amount
 * @property string|null $rate
 * @property string|null $type
 */
class TaxBreakdownItem extends Shape
{
    /**
     * @param array{
     *     amount?: string|null,
     *     rate?: string|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
