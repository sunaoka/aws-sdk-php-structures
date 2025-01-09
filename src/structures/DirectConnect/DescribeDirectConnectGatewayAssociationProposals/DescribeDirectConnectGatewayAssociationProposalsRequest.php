<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAssociationProposals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $directConnectGatewayId
 * @property string $proposalId
 * @property string $associatedGatewayId
 * @property int $maxResults
 * @property string $nextToken
 */
class DescribeDirectConnectGatewayAssociationProposalsRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId?: string,
     *     proposalId?: string,
     *     associatedGatewayId?: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
