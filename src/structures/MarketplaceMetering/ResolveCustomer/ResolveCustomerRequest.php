<?php

namespace Sunaoka\Aws\Structures\MarketplaceMetering\ResolveCustomer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegistrationToken
 */
class ResolveCustomerRequest extends Request
{
    /**
     * @param array{RegistrationToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
