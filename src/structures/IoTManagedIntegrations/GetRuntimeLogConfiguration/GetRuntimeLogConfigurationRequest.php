<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetRuntimeLogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedThingId
 */
class GetRuntimeLogConfigurationRequest extends Request
{
    /**
     * @param array{ManagedThingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
