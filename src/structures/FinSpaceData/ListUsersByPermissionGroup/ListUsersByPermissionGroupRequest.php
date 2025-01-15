<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListUsersByPermissionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionGroupId
 * @property string|null $nextToken
 * @property int<1, 100> $maxResults
 */
class ListUsersByPermissionGroupRequest extends Request
{
    /**
     * @param array{
     *     permissionGroupId: string,
     *     nextToken?: string|null,
     *     maxResults: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
