<?php

namespace Sunaoka\Aws\Structures\RAM\ListPermissionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property string $nextToken
 * @property int<1, 500> $maxResults
 */
class ListPermissionVersionsRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
