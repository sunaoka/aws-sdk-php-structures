<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\ListAppInstanceUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListAppInstanceUsersRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
