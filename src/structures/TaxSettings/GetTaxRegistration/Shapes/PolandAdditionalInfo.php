<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $individualRegistrationNumber
 * @property bool|null $isGroupVatEnabled
 * @property 'EUTaxRegistrationNumber'|'LocalTaxRegistrationNumber'|'LocalRegistrationNumber'|null $taxRegistrationNumberType
 */
class PolandAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     individualRegistrationNumber?: string|null,
     *     isGroupVatEnabled?: bool|null,
     *     taxRegistrationNumberType?: 'EUTaxRegistrationNumber'|'LocalTaxRegistrationNumber'|'LocalRegistrationNumber'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
