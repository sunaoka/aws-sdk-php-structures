<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ResourceOwner
 * @property list<Shapes\InstanceSummary>|null $Instances
 * @property string|null $NextToken
 */
class ListInstancesResponse extends Response
{
}
