<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminLinkProviderForUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property Shapes\ProviderUserIdentifierType $DestinationUser
 * @property Shapes\ProviderUserIdentifierType $SourceUser
 */
class AdminLinkProviderForUserRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     DestinationUser: Shapes\ProviderUserIdentifierType,
     *     SourceUser: Shapes\ProviderUserIdentifierType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
