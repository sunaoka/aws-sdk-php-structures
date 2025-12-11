<?php

namespace Sunaoka\Aws\Structures\AutoScaling\LaunchInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AutoScalingGroupName
 * @property string|null $ClientToken
 * @property list<Shapes\InstanceCollection>|null $Instances
 * @property list<Shapes\LaunchInstancesError>|null $Errors
 */
class LaunchInstancesResponse extends Response
{
}
