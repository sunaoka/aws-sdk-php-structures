<?php

namespace Sunaoka\Aws\Structures\TaxSettings\DeleteTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountId
 */
class DeleteTaxRegistrationRequest extends Request
{
    /**
     * @param array{accountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
