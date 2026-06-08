<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutSupplementalTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registrationId
 * @property 'VAT' $registrationType
 * @property string $legalName
 * @property Address $address
 */
class SupplementalTaxRegistrationEntry extends Shape
{
    /**
     * @param array{
     *     registrationId: string,
     *     registrationType: 'VAT',
     *     legalName: string,
     *     address: Address
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
