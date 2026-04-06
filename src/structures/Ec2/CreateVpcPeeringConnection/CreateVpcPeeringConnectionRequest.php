<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcPeeringConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $PeerOwnerId
 * @property string|null $PeerVpcId
 * @property string $VpcId
 * @property string|null $PeerRegion
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateVpcPeeringConnectionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     PeerOwnerId?: string|null,
     *     PeerVpcId?: string|null,
     *     VpcId: string,
     *     PeerRegion?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
