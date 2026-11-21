<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetApiInventoryItem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'GET'|'POST'|'PUT'|'DELETE'|'PATCH'|'ANY'|'HEAD'|'OPTIONS' $method
 * @property string $host
 * @property int<0, 65535> $port
 * @property string $path
 * @property string $resourceArn
 */
class GetApiInventoryItemRequest extends Request
{
    /**
     * @param array{
     *     method: 'GET'|'POST'|'PUT'|'DELETE'|'PATCH'|'ANY'|'HEAD'|'OPTIONS',
     *     host: string,
     *     port: int<0, 65535>,
     *     path: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
