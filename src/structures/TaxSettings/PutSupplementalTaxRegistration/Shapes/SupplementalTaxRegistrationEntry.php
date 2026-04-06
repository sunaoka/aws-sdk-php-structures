<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutSupplementalTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Address $address
 * @property string $legalName
 * @property string $registrationId
 * @property 'VAT' $registrationType
 */
class SupplementalTaxRegistrationEntry extends Shape
{
    /**
     * @param array{
     *     address: Address,
     *     legalName: string,
     *     registrationId: string,
     *     registrationType: 'VAT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
