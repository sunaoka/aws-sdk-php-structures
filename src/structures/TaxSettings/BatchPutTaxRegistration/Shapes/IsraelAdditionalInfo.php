<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Business'|'Individual' $customerType
 * @property 'Authorized'|'Non-authorized' $dealerType
 */
class IsraelAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     customerType: 'Business'|'Individual',
     *     dealerType: 'Authorized'|'Non-authorized'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
