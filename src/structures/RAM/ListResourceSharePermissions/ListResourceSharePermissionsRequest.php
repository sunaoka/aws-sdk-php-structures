<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceSharePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string $nextToken
 * @property int<1, 500> $maxResults
 */
class ListResourceSharePermissionsRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
