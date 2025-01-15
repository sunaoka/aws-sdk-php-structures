<?php

namespace Sunaoka\Aws\Structures\MQ\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
