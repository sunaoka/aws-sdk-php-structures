<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CancelSpotFleetRequestsSuccessItem>|null $SuccessfulFleetRequests
 * @property list<Shapes\CancelSpotFleetRequestsErrorItem>|null $UnsuccessfulFleetRequests
 */
class CancelSpotFleetRequestsResponse extends Response
{
}
