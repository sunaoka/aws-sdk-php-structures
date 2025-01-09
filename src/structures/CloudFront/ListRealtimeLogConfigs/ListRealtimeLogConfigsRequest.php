<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListRealtimeLogConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MaxItems
 * @property string $Marker
 */
class ListRealtimeLogConfigsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: string,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
