<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDisableProviderForUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property Shapes\ProviderUserIdentifierType $User
 */
class AdminDisableProviderForUserRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     User: Shapes\ProviderUserIdentifierType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
