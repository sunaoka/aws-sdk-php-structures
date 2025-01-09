<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FirewallArn
 * @property string $FirewallName
 * @property Shapes\LoggingConfiguration $LoggingConfiguration
 */
class UpdateLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FirewallArn?: string,
     *     FirewallName?: string,
     *     LoggingConfiguration?: Shapes\LoggingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
