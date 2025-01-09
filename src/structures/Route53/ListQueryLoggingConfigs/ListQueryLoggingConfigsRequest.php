<?php

namespace Sunaoka\Aws\Structures\Route53\ListQueryLoggingConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property string $NextToken
 * @property string $MaxResults
 */
class ListQueryLoggingConfigsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId?: string,
     *     NextToken?: string,
     *     MaxResults?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
