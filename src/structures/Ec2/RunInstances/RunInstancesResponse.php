<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\GroupIdentifier>|null $Groups
 * @property list<Shapes\Instance>|null $Instances
 * @property string|null $OwnerId
 * @property string|null $RequesterId
 * @property string|null $ReservationId
 */
class RunInstancesResponse extends Response
{
}
