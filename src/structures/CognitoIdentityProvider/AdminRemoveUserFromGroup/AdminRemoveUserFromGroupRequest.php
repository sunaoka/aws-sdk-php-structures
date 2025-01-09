<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminRemoveUserFromGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property string $GroupName
 */
class AdminRemoveUserFromGroupRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     GroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
