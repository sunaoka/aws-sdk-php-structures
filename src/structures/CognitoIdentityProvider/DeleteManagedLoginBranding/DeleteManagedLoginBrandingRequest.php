<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteManagedLoginBranding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedLoginBrandingId
 * @property string $UserPoolId
 */
class DeleteManagedLoginBrandingRequest extends Request
{
    /**
     * @param array{
     *     ManagedLoginBrandingId: string,
     *     UserPoolId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
