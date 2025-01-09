<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 */
class GetTaxRegistrationRequest extends Request
{
    /**
     * @param array{accountId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
