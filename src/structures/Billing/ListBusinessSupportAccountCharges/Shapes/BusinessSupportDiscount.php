<?php

namespace Sunaoka\Aws\Structures\Billing\ListBusinessSupportAccountCharges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $discountAmount
 * @property string|null $discountPercentage
 * @property string|null $discountType
 * @property string|null $discountSource
 */
class BusinessSupportDiscount extends Shape
{
    /**
     * @param array{
     *     discountAmount?: string|null,
     *     discountPercentage?: string|null,
     *     discountType?: string|null,
     *     discountSource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
