<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $nodegroupName
 * @property Shapes\UpdateLabelsPayload $labels
 * @property Shapes\UpdateTaintsPayload $taints
 * @property Shapes\NodegroupScalingConfig $scalingConfig
 * @property Shapes\NodegroupUpdateConfig $updateConfig
 * @property Shapes\NodeRepairConfig $nodeRepairConfig
 * @property string $clientRequestToken
 */
class UpdateNodegroupConfigRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     nodegroupName: string,
     *     labels?: Shapes\UpdateLabelsPayload,
     *     taints?: Shapes\UpdateTaintsPayload,
     *     scalingConfig?: Shapes\NodegroupScalingConfig,
     *     updateConfig?: Shapes\NodegroupUpdateConfig,
     *     nodeRepairConfig?: Shapes\NodeRepairConfig,
     *     clientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
