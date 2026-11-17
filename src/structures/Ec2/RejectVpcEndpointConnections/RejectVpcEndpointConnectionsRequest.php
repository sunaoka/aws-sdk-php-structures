<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectVpcEndpointConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $ServiceId
 * @property list<string> $VpcEndpointIds
 * @property list<string>|null $TransitGatewayAttachmentIds
 */
class RejectVpcEndpointConnectionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceId: string,
     *     VpcEndpointIds: list<string>,
     *     TransitGatewayAttachmentIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
