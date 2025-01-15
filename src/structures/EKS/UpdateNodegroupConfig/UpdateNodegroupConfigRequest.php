<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateNodegroupConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $nodegroupName
 * @property Shapes\UpdateLabelsPayload|null $labels
 * @property Shapes\UpdateTaintsPayload|null $taints
 * @property Shapes\NodegroupScalingConfig|null $scalingConfig
 * @property Shapes\NodegroupUpdateConfig|null $updateConfig
 * @property Shapes\NodeRepairConfig|null $nodeRepairConfig
 * @property string|null $clientRequestToken
 */
class UpdateNodegroupConfigRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     nodegroupName: string,
     *     labels?: Shapes\UpdateLabelsPayload|null,
     *     taints?: Shapes\UpdateTaintsPayload|null,
     *     scalingConfig?: Shapes\NodegroupScalingConfig|null,
     *     updateConfig?: Shapes\NodegroupUpdateConfig|null,
     *     nodeRepairConfig?: Shapes\NodeRepairConfig|null,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
