<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateMonitor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $monitorName
 * @property list<Shapes\MonitorLocalResource> $localResources
 * @property list<Shapes\MonitorRemoteResource>|null $remoteResources
 * @property string $scopeArn
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateMonitorRequest extends Request
{
    /**
     * @param array{
     *     monitorName: string,
     *     localResources: list<Shapes\MonitorLocalResource>,
     *     remoteResources?: list<Shapes\MonitorRemoteResource>|null,
     *     scopeArn: string,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
