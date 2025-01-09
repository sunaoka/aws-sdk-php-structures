<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListGroupsForUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Username
 * @property string $UserPoolId
 * @property int $Limit
 * @property string $NextToken
 */
class AdminListGroupsForUserRequest extends Request
{
    /**
     * @param array{
     *     Username: string,
     *     UserPoolId: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
