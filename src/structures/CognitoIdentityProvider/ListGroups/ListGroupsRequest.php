<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int<0, 60>|null $Limit
 * @property string|null $NextToken
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Limit?: int<0, 60>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
