<?php

namespace Sunaoka\Aws\Structures\Connect\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
