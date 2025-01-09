<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSubnetCidrReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetId
 * @property string $Cidr
 * @property 'prefix'|'explicit' $ReservationType
 * @property string $Description
 * @property bool $DryRun
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateSubnetCidrReservationRequest extends Request
{
    /**
     * @param array{
     *     SubnetId: string,
     *     Cidr: string,
     *     ReservationType: 'prefix'|'explicit',
     *     Description?: string,
     *     DryRun?: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
