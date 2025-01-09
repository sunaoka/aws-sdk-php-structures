<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identityProviderArn
 */
class GetIdentityProviderRequest extends Request
{
    /**
     * @param array{identityProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
