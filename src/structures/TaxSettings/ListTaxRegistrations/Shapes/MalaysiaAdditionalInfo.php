<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Consultancy'|'Digital Service And Electronic Medium'|'IT Services'|'Training Or Coaching'>|null $serviceTaxCodes
 * @property string|null $taxInformationNumber
 * @property string|null $businessRegistrationNumber
 */
class MalaysiaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     serviceTaxCodes?: list<'Consultancy'|'Digital Service And Electronic Medium'|'IT Services'|'Training Or Coaching'>|null,
     *     taxInformationNumber?: string|null,
     *     businessRegistrationNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
