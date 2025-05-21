<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Business'|'Individual'|null $taxRegistrationNumberType
 * @property string|null $vatRegistrationNumber
 */
class UzbekistanAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     taxRegistrationNumberType?: 'Business'|'Individual'|null,
     *     vatRegistrationNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
