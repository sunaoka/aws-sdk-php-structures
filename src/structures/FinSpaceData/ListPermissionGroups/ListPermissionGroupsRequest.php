<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListPermissionGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100> $maxResults
 */
class ListPermissionGroupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
