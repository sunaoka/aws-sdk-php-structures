<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectVpcEndpointConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ServiceId
 * @property list<string> $VpcEndpointIds
 */
class RejectVpcEndpointConnectionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceId: string,
     *     VpcEndpointIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
