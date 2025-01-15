<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DeleteFleetSuccessItem>|null $SuccessfulFleetDeletions
 * @property list<Shapes\DeleteFleetErrorItem>|null $UnsuccessfulFleetDeletions
 */
class DeleteFleetsResponse extends Response
{
}
