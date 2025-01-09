<?php

namespace Sunaoka\Aws\Structures\TaxSettings\DeleteSupplementalTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorityId
 */
class DeleteSupplementalTaxRegistrationRequest extends Request
{
    /**
     * @param array{authorityId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
