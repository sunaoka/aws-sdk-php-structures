<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListUserAuthEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property int<0, 60>|null $MaxResults
 * @property string|null $NextToken
 */
class AdminListUserAuthEventsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     MaxResults?: int<0, 60>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
