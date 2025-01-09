<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListGatewaysRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
