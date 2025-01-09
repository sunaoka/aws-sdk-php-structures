<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PeerRegion
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property string $VpcId
 * @property string $PeerVpcId
 * @property string $PeerOwnerId
 */
class CreateVpcPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     PeerRegion?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     VpcId: string,
     *     PeerVpcId?: string,
     *     PeerOwnerId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
