<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceSharePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class ListResourceSharePermissionsRequest extends Request
{
    /**
     * @param array{
     *     resourceShareArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
