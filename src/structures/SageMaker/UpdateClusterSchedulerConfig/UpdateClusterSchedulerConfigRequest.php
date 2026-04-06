<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateClusterSchedulerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterSchedulerConfigId
 * @property int $TargetVersion
 * @property Shapes\SchedulerConfig|null $SchedulerConfig
 * @property string|null $Description
 */
class UpdateClusterSchedulerConfigRequest extends Request
{
    /**
     * @param array{
     *     ClusterSchedulerConfigId: string,
     *     TargetVersion: int,
     *     SchedulerConfig?: Shapes\SchedulerConfig|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
