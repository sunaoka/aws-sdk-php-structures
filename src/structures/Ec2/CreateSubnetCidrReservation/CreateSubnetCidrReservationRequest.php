<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnetCidrReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetId
 * @property string $Cidr
 * @property 'prefix'|'explicit' $ReservationType
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateSubnetCidrReservationRequest extends Request
{
    /**
     * @param array{
     *     SubnetId: string,
     *     Cidr: string,
     *     ReservationType: 'prefix'|'explicit',
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
