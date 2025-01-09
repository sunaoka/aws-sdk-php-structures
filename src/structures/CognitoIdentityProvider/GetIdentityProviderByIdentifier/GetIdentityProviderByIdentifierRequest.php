<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetIdentityProviderByIdentifier;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $IdpIdentifier
 */
class GetIdentityProviderByIdentifierRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     IdpIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
