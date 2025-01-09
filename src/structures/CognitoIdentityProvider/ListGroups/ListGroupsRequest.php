<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int<0, 60> $Limit
 * @property string $NextToken
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Limit?: int<0, 60>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
