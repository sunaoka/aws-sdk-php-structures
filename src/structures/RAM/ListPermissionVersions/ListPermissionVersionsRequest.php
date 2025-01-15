<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class ListPermissionVersionsRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
