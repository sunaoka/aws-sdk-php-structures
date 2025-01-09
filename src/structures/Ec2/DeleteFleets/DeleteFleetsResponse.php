<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DeleteFleetSuccessItem> $SuccessfulFleetDeletions
 * @property list<Shapes\DeleteFleetErrorItem> $UnsuccessfulFleetDeletions
 */
class DeleteFleetsResponse extends Response
{
}
