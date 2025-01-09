<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcPeeringConnectionOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PeeringConnectionOptionsRequest $AccepterPeeringConnectionOptions
 * @property bool $DryRun
 * @property Shapes\PeeringConnectionOptionsRequest $RequesterPeeringConnectionOptions
 * @property string $VpcPeeringConnectionId
 */
class ModifyVpcPeeringConnectionOptionsRequest extends Request
{
    /**
     * @param array{
     *     AccepterPeeringConnectionOptions?: Shapes\PeeringConnectionOptionsRequest,
     *     DryRun?: bool,
     *     RequesterPeeringConnectionOptions?: Shapes\PeeringConnectionOptionsRequest,
     *     VpcPeeringConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
