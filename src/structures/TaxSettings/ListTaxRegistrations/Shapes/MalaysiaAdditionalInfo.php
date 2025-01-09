<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $businessRegistrationNumber
 * @property list<'Consultancy'|'Digital Service And Electronic Medium'|'IT Services'|'Training Or Coaching'> $serviceTaxCodes
 * @property string $taxInformationNumber
 */
class MalaysiaAdditionalInfo extends Shape
{
    /**
     * @param array{
     *     businessRegistrationNumber?: string,
     *     serviceTaxCodes?: list<'Consultancy'|'Digital Service And Electronic Medium'|'IT Services'|'Training Or Coaching'>,
     *     taxInformationNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
