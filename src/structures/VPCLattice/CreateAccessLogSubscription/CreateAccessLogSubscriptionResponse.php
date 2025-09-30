<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateAccessLogSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $arn
 * @property string $resourceId
 * @property string $resourceArn
 * @property 'SERVICE'|'RESOURCE'|null $serviceNetworkLogType
 * @property string $destinationArn
 */
class CreateAccessLogSubscriptionResponse extends Response
{
}
