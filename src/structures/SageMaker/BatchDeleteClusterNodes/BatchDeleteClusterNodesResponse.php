<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDeleteClusterNodes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchDeleteClusterNodesError>|null $Failed
 * @property list<string>|null $Successful
 * @property list<Shapes\BatchDeleteClusterNodeLogicalIdsError>|null $FailedNodeLogicalIds
 * @property list<string>|null $SuccessfulNodeLogicalIds
 */
class BatchDeleteClusterNodesResponse extends Response
{
}
