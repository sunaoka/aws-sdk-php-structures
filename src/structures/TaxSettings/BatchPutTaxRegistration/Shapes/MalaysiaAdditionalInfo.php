<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Consultancy'|'Digital Service And Electronic Medium'|'IT Services'|'Training Or Coaching'> $serviceTaxCodes
 */
class MalaysiaAdditionalInfo extends Shape
{
    /**
     * @param array{serviceTaxCodes: list<'Consultancy'|'Digital Service And Electronic Medium'|'IT Services'|'Training Or Coaching'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
