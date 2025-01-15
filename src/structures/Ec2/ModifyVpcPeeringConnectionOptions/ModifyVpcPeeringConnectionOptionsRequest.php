<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcPeeringConnectionOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\PeeringConnectionOptionsRequest|null $AccepterPeeringConnectionOptions
 * @property bool|null $DryRun
 * @property Shapes\PeeringConnectionOptionsRequest|null $RequesterPeeringConnectionOptions
 * @property string $VpcPeeringConnectionId
 */
class ModifyVpcPeeringConnectionOptionsRequest extends Request
{
    /**
     * @param array{
     *     AccepterPeeringConnectionOptions?: Shapes\PeeringConnectionOptionsRequest|null,
     *     DryRun?: bool|null,
     *     RequesterPeeringConnectionOptions?: Shapes\PeeringConnectionOptionsRequest|null,
     *     VpcPeeringConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
