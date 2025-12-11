<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchRebootClusterNodes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $Successful
 * @property list<Shapes\BatchRebootClusterNodesError>|null $Failed
 * @property list<Shapes\BatchRebootClusterNodeLogicalIdsError>|null $FailedNodeLogicalIds
 * @property list<string>|null $SuccessfulNodeLogicalIds
 */
class BatchRebootClusterNodesResponse extends Response
{
}
