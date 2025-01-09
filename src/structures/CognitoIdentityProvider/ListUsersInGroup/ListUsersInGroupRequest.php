<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsersInGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $GroupName
 * @property int $Limit
 * @property string $NextToken
 */
class ListUsersInGroupRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     GroupName: string,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
