<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $VpcPeeringConnectionId
 */
class AcceptVpcPeeringConnectionRequest extends Request
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
