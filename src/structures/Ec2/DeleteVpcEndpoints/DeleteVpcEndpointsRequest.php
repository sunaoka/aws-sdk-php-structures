<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $VpcEndpointIds
 */
class DeleteVpcEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VpcEndpointIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
