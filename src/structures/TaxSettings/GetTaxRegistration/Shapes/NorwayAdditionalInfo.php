<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TaxRegistrationNumber'|'LocalRegistrationNumber'|null $taxRegistrationNumberType
 * @property string|null $peppolId
 */
class NorwayAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     taxRegistrationNumberType?: 'TaxRegistrationNumber'|'LocalRegistrationNumber'|null,
     *     peppolId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
