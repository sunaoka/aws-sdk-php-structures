<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceSharePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListResourceSharePermissionsRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
