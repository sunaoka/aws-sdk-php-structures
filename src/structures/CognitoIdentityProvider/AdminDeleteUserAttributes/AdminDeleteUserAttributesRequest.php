<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminDeleteUserAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property list<string> $UserAttributeNames
 */
class AdminDeleteUserAttributesRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     UserAttributeNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
