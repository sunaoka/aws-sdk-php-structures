<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchAddClusterNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string|null $ClientToken
 * @property list<Shapes\AddClusterNodeSpecification> $NodesToAdd
 */
class BatchAddClusterNodesRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     ClientToken?: string|null,
     *     NodesToAdd: list<Shapes\AddClusterNodeSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
