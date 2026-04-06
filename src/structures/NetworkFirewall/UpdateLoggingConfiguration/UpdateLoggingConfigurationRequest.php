<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property Shapes\LoggingConfiguration|null $LoggingConfiguration
 * @property bool|null $EnableMonitoringDashboard
 */
class UpdateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     LoggingConfiguration?: Shapes\LoggingConfiguration|null,
     *     EnableMonitoringDashboard?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
