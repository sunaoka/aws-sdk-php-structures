<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int $Limit
 * @property string $NextToken
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
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
