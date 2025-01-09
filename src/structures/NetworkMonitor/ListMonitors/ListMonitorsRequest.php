<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\ListMonitors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 25> $maxResults
 * @property string $state
 */
class ListMonitorsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 25>,
     *     state?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
