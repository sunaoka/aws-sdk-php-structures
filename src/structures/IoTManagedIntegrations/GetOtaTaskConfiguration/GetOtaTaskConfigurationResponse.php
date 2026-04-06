<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTaskConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TaskConfigurationId
 * @property string|null $Name
 * @property Shapes\PushConfig|null $PushConfig
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 */
class GetOtaTaskConfigurationResponse extends Response
{
}
