<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReservationId
 * @property string $OwnerId
 * @property string $RequesterId
 * @property list<Shapes\GroupIdentifier> $Groups
 * @property list<Shapes\Instance> $Instances
 */
class RunInstancesResponse extends Response
{
}
