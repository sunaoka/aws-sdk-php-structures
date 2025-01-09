<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateAccessLogSubscription;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $destinationArn
 * @property string $id
 * @property string $resourceArn
 * @property string $resourceId
 * @property 'SERVICE'|'RESOURCE' $serviceNetworkLogType
 */
class CreateAccessLogSubscriptionResponse extends Response
{
}
