<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchReplaceClusterNodes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $Successful
 * @property list<Shapes\BatchReplaceClusterNodesError>|null $Failed
 * @property list<Shapes\BatchReplaceClusterNodeLogicalIdsError>|null $FailedNodeLogicalIds
 * @property list<string>|null $SuccessfulNodeLogicalIds
 */
class BatchReplaceClusterNodesResponse extends Response
{
}
