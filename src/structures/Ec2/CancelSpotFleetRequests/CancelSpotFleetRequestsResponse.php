<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelSpotFleetRequests;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CancelSpotFleetRequestsSuccessItem> $SuccessfulFleetRequests
 * @property list<Shapes\CancelSpotFleetRequestsErrorItem> $UnsuccessfulFleetRequests
 */
class CancelSpotFleetRequestsResponse extends Response
{
}
