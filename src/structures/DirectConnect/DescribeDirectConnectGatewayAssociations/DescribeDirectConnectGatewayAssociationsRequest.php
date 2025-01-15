<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $associationId
 * @property string|null $associatedGatewayId
 * @property string|null $directConnectGatewayId
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property string|null $virtualGatewayId
 */
class DescribeDirectConnectGatewayAssociationsRequest extends Request
{
    /**
     * @param array{
     *     associationId?: string|null,
     *     associatedGatewayId?: string|null,
     *     directConnectGatewayId?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     virtualGatewayId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
