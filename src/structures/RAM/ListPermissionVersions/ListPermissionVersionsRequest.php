<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListPermissionVersionsRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
