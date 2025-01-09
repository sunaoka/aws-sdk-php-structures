<?php

namespace Sunaoka\Aws\Structures\TaxSettings\DeleteTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class DeleteTaxRegistrationRequest extends Request
{
    /**
     * @param array{accountId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
