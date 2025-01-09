<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteIdentityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identityProviderArn
 */
class DeleteIdentityProviderRequest extends Request
{
    /**
     * @param array{identityProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
