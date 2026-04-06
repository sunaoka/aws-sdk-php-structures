<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property list<Shapes\MonitorLocalResource>|null $localResourcesToAdd
 * @property list<Shapes\MonitorLocalResource>|null $localResourcesToRemove
 * @property list<Shapes\MonitorRemoteResource>|null $remoteResourcesToAdd
 * @property list<Shapes\MonitorRemoteResource>|null $remoteResourcesToRemove
 * @property string|null $clientToken
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     localResourcesToAdd?: list<Shapes\MonitorLocalResource>|null,
     *     localResourcesToRemove?: list<Shapes\MonitorLocalResource>|null,
     *     remoteResourcesToAdd?: list<Shapes\MonitorRemoteResource>|null,
     *     remoteResourcesToRemove?: list<Shapes\MonitorRemoteResource>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
