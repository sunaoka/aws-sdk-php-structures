<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcEndpointConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $ServiceId
 * @property list<string> $VpcEndpointIds
 */
class AcceptVpcEndpointConnectionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceId: string,
     *     VpcEndpointIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
