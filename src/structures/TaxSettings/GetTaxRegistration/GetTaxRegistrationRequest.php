<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountId
 */
class GetTaxRegistrationRequest extends Request
{
    /**
     * @param array{accountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
