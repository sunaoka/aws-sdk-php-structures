<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $VpcPeeringConnectionId
 */
class DeleteVpcPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VpcPeeringConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
