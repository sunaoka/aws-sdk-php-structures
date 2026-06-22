<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListSyslogConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupIdentifier
 * @property string|null $vpcEndpointId
 * @property string|null $nextToken
 * @property int<0, 50>|null $maxResults
 */
class ListSyslogConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifier?: string|null,
     *     vpcEndpointId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
