<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSubnetCidrReservations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SubnetCidrReservation> $SubnetIpv4CidrReservations
 * @property list<Shapes\SubnetCidrReservation> $SubnetIpv6CidrReservations
 * @property string $NextToken
 */
class GetSubnetCidrReservationsResponse extends Response
{
}
