<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSubnetCidrReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetCidrReservationId
 * @property bool|null $DryRun
 */
class DeleteSubnetCidrReservationRequest extends Request
{
    /**
     * @param array{
     *     SubnetCidrReservationId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
