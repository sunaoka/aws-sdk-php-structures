<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeDirectConnectGatewaysRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
