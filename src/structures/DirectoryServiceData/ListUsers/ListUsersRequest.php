<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int<1, 250>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Realm
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     MaxResults?: int<1, 250>|null,
     *     NextToken?: string|null,
     *     Realm?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
