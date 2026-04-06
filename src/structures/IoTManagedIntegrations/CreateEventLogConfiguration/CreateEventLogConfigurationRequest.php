<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateEventLogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceType
 * @property string|null $ResourceId
 * @property 'DEBUG'|'ERROR'|'INFO'|'WARN' $EventLogLevel
 * @property string|null $ClientToken
 */
class CreateEventLogConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ResourceType: string,
     *     ResourceId?: string|null,
     *     EventLogLevel: 'DEBUG'|'ERROR'|'INFO'|'WARN',
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
