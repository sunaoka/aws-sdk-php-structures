<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property list<Shapes\MonitorLocalResource> $localResourcesToAdd
 * @property list<Shapes\MonitorLocalResource> $localResourcesToRemove
 * @property list<Shapes\MonitorRemoteResource> $remoteResourcesToAdd
 * @property list<Shapes\MonitorRemoteResource> $remoteResourcesToRemove
 * @property string $clientToken
 */
class UpdateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     localResourcesToAdd?: list<Shapes\MonitorLocalResource>,
     *     localResourcesToRemove?: list<Shapes\MonitorLocalResource>,
     *     remoteResourcesToAdd?: list<Shapes\MonitorRemoteResource>,
     *     remoteResourcesToRemove?: list<Shapes\MonitorRemoteResource>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
