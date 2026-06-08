<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Authorized'|'Non-authorized' $dealerType
 * @property 'Business'|'Individual' $customerType
 */
class IsraelAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     dealerType: 'Authorized'|'Non-authorized',
     *     customerType: 'Business'|'Individual'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
