<?php

namespace Sunaoka\Aws\Structures\MQ\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
