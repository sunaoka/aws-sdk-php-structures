<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FleetId
 * @property list<Shapes\CreateFleetError> $Errors
 * @property list<Shapes\CreateFleetInstance> $Instances
 */
class CreateFleetResponse extends Response
{
}
