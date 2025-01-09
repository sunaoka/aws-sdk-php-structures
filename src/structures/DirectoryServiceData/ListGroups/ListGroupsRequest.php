<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $Realm
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Realm?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
