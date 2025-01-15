<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\ListMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 25>|null $maxResults
 * @property string|null $state
 */
class ListMonitorsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 25>|null,
     *     state?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
