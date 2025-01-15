<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TaxRegistrationNumber'|'TaxIdentificationNumber'|'CommercialRegistrationNumber'|null $taxRegistrationNumberType
 */
class SaudiArabiaAdditionalInfo extends Shape
{
    /**
     * @param array{taxRegistrationNumberType?: 'TaxRegistrationNumber'|'TaxIdentificationNumber'|'CommercialRegistrationNumber'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
