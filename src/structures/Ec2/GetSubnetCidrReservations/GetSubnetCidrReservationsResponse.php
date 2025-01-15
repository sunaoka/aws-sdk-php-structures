<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSubnetCidrReservations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SubnetCidrReservation>|null $SubnetIpv4CidrReservations
 * @property list<Shapes\SubnetCidrReservation>|null $SubnetIpv6CidrReservations
 * @property string|null $NextToken
 */
class GetSubnetCidrReservationsResponse extends Response
{
}
