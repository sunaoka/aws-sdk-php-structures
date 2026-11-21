<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VATTaxRegistrationNumber'|'LocalTaxRegistrationNumber'|null $taxRegistrationNumberType
 * @property string|null $peppolId
 * @property string|null $tradeLicenseNumber
 * @property string|null $emiratesId
 */
class UnitedArabEmiratesAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     taxRegistrationNumberType?: 'VATTaxRegistrationNumber'|'LocalTaxRegistrationNumber'|null,
     *     peppolId?: string|null,
     *     tradeLicenseNumber?: string|null,
     *     emiratesId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
