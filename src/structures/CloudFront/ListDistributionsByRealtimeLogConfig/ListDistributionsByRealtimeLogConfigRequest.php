<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributionsByRealtimeLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property string|null $RealtimeLogConfigName
 * @property string|null $RealtimeLogConfigArn
 */
class ListDistributionsByRealtimeLogConfigRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     RealtimeLogConfigName?: string|null,
     *     RealtimeLogConfigArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
