<?php

namespace Sunaoka\Aws\Structures\Route53\ListQueryLoggingConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HostedZoneId
 * @property string|null $NextToken
 * @property string|null $MaxResults
 */
class ListQueryLoggingConfigsRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
