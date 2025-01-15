<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAssociationProposals;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $directConnectGatewayId
 * @property string|null $proposalId
 * @property string|null $associatedGatewayId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class DescribeDirectConnectGatewayAssociationProposalsRequest extends Request
{
    /**
     * @param array{
     *     directConnectGatewayId?: string|null,
     *     proposalId?: string|null,
     *     associatedGatewayId?: string|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
