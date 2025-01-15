<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListRealtimeLogConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $MaxItems
 * @property string|null $Marker
 */
class ListRealtimeLogConfigsRequest extends Request
{
    /**
     * @param array{
     *     MaxItems?: string|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
