<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListDevicePools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property 'CURATED'|'PRIVATE'|null $type
 * @property string|null $nextToken
 */
class ListDevicePoolsRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     type?: 'CURATED'|'PRIVATE'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
