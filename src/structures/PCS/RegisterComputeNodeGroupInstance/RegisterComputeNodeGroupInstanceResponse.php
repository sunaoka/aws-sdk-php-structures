<?php

namespace Sunaoka\Aws\Structures\PCS\RegisterComputeNodeGroupInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $nodeID
 * @property string $sharedSecret
 * @property list<Shapes\Endpoint> $endpoints
 * @property string|null $clusterName
 * @property string|null $computeNodeGroupId
 * @property string|null $computeNodeGroupName
 * @property Shapes\NodeLifecycleActions|null $nodeLifecycleActions
 * @property string|null $schedulerVersion
 */
class RegisterComputeNodeGroupInstanceResponse extends Response
{
}
