<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountIdentifier
 * @property AccountCustomer|null $Customer
 */
class CustomerAccountContext extends Shape
{
    /**
     * @param array{
     *     AccountIdentifier?: string|null,
     *     Customer?: AccountCustomer|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
