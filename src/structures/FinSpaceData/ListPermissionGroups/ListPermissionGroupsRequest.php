<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 */
class ListPermissionGroupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
