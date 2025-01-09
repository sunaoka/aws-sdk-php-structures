<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property string $virtualInterfaceId
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeDirectConnectGatewayAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId?: string,
     *     virtualInterfaceId?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
