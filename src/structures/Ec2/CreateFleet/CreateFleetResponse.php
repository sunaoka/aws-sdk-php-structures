<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FleetId
 * @property list<Shapes\CreateFleetError>|null $Errors
 * @property list<Shapes\CreateFleetInstance>|null $Instances
 */
class CreateFleetResponse extends Response
{
}
