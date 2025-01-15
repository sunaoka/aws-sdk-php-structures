<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsersInGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $GroupName
 * @property int<0, 60>|null $Limit
 * @property string|null $NextToken
 */
class ListUsersInGroupRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     GroupName: string,
     *     Limit?: int<0, 60>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
