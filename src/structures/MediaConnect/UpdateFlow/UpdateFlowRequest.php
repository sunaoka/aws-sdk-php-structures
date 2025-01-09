<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FlowArn
 * @property Shapes\UpdateFailoverConfig $SourceFailoverConfig
 * @property Shapes\UpdateMaintenance $Maintenance
 * @property Shapes\MonitoringConfig $SourceMonitoringConfig
 */
class UpdateFlowRequest extends Request
{
    /**
     * @param array{
     *     FlowArn: string,
     *     SourceFailoverConfig?: Shapes\UpdateFailoverConfig,
     *     Maintenance?: Shapes\UpdateMaintenance,
     *     SourceMonitoringConfig?: Shapes\MonitoringConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
