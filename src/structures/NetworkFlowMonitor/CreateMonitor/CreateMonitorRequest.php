<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property list<Shapes\MonitorLocalResource> $localResources
 * @property list<Shapes\MonitorRemoteResource> $remoteResources
 * @property string $scopeArn
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     localResources: list<Shapes\MonitorLocalResource>,
     *     remoteResources?: list<Shapes\MonitorRemoteResource>,
     *     scopeArn: string,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
