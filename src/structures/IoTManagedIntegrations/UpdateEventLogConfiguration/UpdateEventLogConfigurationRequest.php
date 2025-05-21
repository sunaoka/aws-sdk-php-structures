<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\UpdateEventLogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property 'DEBUG'|'ERROR'|'INFO'|'WARN' $EventLogLevel
 */
class UpdateEventLogConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     EventLogLevel: 'DEBUG'|'ERROR'|'INFO'|'WARN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
