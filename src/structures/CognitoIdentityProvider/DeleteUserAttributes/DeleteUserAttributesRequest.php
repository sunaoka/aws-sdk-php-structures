<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $UserAttributeNames
 * @property string $AccessToken
 */
class DeleteUserAttributesRequest extends Request
{
    /**
     * @param array{
     *     UserAttributeNames: list<string>,
     *     AccessToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
