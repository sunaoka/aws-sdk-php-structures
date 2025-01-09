<?php

namespace Sunaoka\Aws\Structures\Chime\ListAppInstanceUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAppInstanceUsersRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
