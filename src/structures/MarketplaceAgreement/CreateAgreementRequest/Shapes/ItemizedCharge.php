<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CreateAgreementRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dimensionKey
 * @property int|null $newQuantity
 * @property int|null $oldQuantity
 * @property string|null $chargeReference
 * @property string|null $incrementalChargeAmount
 */
class ItemizedCharge extends Shape
{
    /**
     * @param array{
     *     dimensionKey?: string|null,
     *     newQuantity?: int|null,
     *     oldQuantity?: int|null,
     *     chargeReference?: string|null,
     *     incrementalChargeAmount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
