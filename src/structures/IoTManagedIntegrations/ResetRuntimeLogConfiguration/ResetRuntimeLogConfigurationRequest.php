<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ResetRuntimeLogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedThingId
 */
class ResetRuntimeLogConfigurationRequest extends Request
{
    /**
     * @param array{ManagedThingId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
