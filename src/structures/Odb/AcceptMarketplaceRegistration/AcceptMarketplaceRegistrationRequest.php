<?php

namespace Sunaoka\Aws\Structures\Odb\AcceptMarketplaceRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $marketplaceRegistrationToken
 */
class AcceptMarketplaceRegistrationRequest extends Request
{
    /**
     * @param array{marketplaceRegistrationToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
