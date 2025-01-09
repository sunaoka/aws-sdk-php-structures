<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListDevicePools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property 'CURATED'|'PRIVATE' $type
 * @property string $nextToken
 */
class ListDevicePoolsRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     type?: 'CURATED'|'PRIVATE',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
