<?php

namespace Sunaoka\Aws\Structures\SageMaker\MoveClusterNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceClusterArn
 * @property string $SourceInstanceGroupName
 * @property string $TargetClusterArn
 * @property string $TargetInstanceGroupName
 * @property int<1, 50>|null $InstanceCount
 * @property list<string>|null $NodeIds
 * @property list<string>|null $NodeLogicalIds
 * @property string|null $ClientToken
 */
class MoveClusterNodesRequest extends Request
{
    /**
     * @param array{
     *     SourceClusterArn: string,
     *     SourceInstanceGroupName: string,
     *     TargetClusterArn: string,
     *     TargetInstanceGroupName: string,
     *     InstanceCount?: int<1, 50>|null,
     *     NodeIds?: list<string>|null,
     *     NodeLogicalIds?: list<string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
