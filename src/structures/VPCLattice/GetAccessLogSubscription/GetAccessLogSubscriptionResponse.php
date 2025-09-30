<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetAccessLogSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $resourceId
 * @property string $resourceArn
 * @property string $destinationArn
 * @property 'SERVICE'|'RESOURCE'|null $serviceNetworkLogType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class GetAccessLogSubscriptionResponse extends Response
{
}
