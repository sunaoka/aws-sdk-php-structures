<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sdiAccountId
 * @property string|null $cigNumber
 * @property string|null $cupNumber
 * @property string|null $taxCode
 * @property 'Business'|'Individual'|null $customerType
 */
class ItalyAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     sdiAccountId?: string|null,
     *     cigNumber?: string|null,
     *     cupNumber?: string|null,
     *     taxCode?: string|null,
     *     customerType?: 'Business'|'Individual'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
