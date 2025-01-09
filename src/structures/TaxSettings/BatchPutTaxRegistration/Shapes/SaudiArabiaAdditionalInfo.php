<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TaxRegistrationNumber'|'TaxIdentificationNumber'|'CommercialRegistrationNumber' $taxRegistrationNumberType
 */
class SaudiArabiaAdditionalInfo extends Shape
{
    /**
     * @param array{taxRegistrationNumberType?: 'TaxRegistrationNumber'|'TaxIdentificationNumber'|'CommercialRegistrationNumber'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
