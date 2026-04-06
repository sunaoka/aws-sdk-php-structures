<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetAccessLogSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $destinationArn
 * @property string $id
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $resourceArn
 * @property string $resourceId
 * @property 'SERVICE'|'RESOURCE'|null $serviceNetworkLogType
 */
class GetAccessLogSubscriptionResponse extends Response
{
}
