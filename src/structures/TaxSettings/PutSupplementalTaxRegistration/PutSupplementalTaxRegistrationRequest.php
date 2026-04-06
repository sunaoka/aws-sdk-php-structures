<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutSupplementalTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\SupplementalTaxRegistrationEntry $taxRegistrationEntry
 */
class PutSupplementalTaxRegistrationRequest extends Request
{
    /**
     * @param array{taxRegistrationEntry: Shapes\SupplementalTaxRegistrationEntry} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
