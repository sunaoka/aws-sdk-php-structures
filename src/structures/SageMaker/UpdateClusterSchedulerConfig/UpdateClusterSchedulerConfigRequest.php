<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSchedulerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSchedulerConfigId
 * @property int $TargetVersion
 * @property Shapes\SchedulerConfig $SchedulerConfig
 * @property string $Description
 */
class UpdateClusterSchedulerConfigRequest extends Request
{
    /**
     * @param array{
     *     ClusterSchedulerConfigId: string,
     *     TargetVersion: int,
     *     SchedulerConfig?: Shapes\SchedulerConfig,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
