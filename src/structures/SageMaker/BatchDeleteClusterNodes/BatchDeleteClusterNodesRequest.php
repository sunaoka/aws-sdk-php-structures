<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDeleteClusterNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property list<string> $NodeIds
 */
class BatchDeleteClusterNodesRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
