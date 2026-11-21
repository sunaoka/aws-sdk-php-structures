<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property 'FIREWALL'|'IGW_FIREWALL'|null $FirewallType
 * @property Shapes\LoggingConfiguration|null $LoggingConfiguration
 * @property bool|null $EnableMonitoringDashboard
 */
class UpdateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     FirewallType?: 'FIREWALL'|'IGW_FIREWALL'|null,
     *     LoggingConfiguration?: Shapes\LoggingConfiguration|null,
     *     EnableMonitoringDashboard?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
