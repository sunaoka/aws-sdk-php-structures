<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PeerRegion
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string $VpcId
 * @property string|null $PeerVpcId
 * @property string|null $PeerOwnerId
 */
class CreateVpcPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     PeerRegion?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     VpcId: string,
     *     PeerVpcId?: string|null,
     *     PeerOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
