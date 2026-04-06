<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetEventLogConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $ResourceType
 * @property string|null $ResourceId
 * @property 'DEBUG'|'ERROR'|'INFO'|'WARN'|null $EventLogLevel
 */
class GetEventLogConfigurationResponse extends Response
{
}
