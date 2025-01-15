<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $businessRegistrationNumber
 * @property list<'Consultancy'|'Digital Service And Electronic Medium'|'IT Services'|'Training Or Coaching'>|null $serviceTaxCodes
 * @property string|null $taxInformationNumber
 */
class MalaysiaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     businessRegistrationNumber?: string|null,
     *     serviceTaxCodes?: list<'Consultancy'|'Digital Service And Electronic Medium'|'IT Services'|'Training Or Coaching'>|null,
     *     taxInformationNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
