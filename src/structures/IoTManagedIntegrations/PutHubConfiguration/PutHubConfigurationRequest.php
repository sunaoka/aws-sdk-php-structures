<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\PutHubConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max> $HubTokenTimerExpirySettingInSeconds
 */
class PutHubConfigurationRequest extends Request
{
    /**
     * @param array{HubTokenTimerExpirySettingInSeconds: int<1, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
