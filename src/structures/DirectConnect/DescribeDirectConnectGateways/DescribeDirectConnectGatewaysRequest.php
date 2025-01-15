<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $directConnectGatewayId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeDirectConnectGatewaysRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
