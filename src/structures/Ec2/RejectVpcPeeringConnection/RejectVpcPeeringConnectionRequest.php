<?php

namespace Sunaoka\Aws\Structures\Ec2\RejectVpcPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $VpcPeeringConnectionId
 */
class RejectVpcPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcPeeringConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
