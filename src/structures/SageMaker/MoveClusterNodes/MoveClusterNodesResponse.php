<?php

namespace Sunaoka\Aws\Structures\SageMaker\MoveClusterNodes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $Successful
 * @property list<Shapes\MoveClusterNodesError>|null $Failed
 * @property list<string>|null $SuccessfulNodeLogicalIds
 * @property list<Shapes\MoveClusterNodeLogicalIdsError>|null $FailedNodeLogicalIds
 */
class MoveClusterNodesResponse extends Response
{
}
