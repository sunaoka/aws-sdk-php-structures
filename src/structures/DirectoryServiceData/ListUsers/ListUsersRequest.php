<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int<1, 250> $MaxResults
 * @property string $NextToken
 * @property string $Realm
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     MaxResults?: int<1, 250>,
     *     NextToken?: string,
     *     Realm?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
