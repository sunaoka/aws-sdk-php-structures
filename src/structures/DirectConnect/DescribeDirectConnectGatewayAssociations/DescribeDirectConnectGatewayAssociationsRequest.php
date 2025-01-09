<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $associationId
 * @property string $associatedGatewayId
 * @property string $directConnectGatewayId
 * @property int $maxResults
 * @property string $nextToken
 * @property string $virtualGatewayId
 */
class DescribeDirectConnectGatewayAssociationsRequest extends Request
{
    /**
     * @param array{
     *     associationId?: string,
     *     associatedGatewayId?: string,
     *     directConnectGatewayId?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     virtualGatewayId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
