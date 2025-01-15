<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $directConnectGatewayId
 * @property string|null $virtualInterfaceId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeDirectConnectGatewayAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId?: string|null,
     *     virtualInterfaceId?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
