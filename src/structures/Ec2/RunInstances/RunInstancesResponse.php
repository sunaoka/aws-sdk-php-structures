<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReservationId
 * @property string|null $OwnerId
 * @property string|null $RequesterId
 * @property list<Shapes\GroupIdentifier>|null $Groups
 * @property list<Shapes\Instance>|null $Instances
 */
class RunInstancesResponse extends Response
{
}
