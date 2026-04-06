<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\PutRuntimeLogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedThingId
 * @property Shapes\RuntimeLogConfigurations $RuntimeLogConfigurations
 */
class PutRuntimeLogConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ManagedThingId: string,
     *     RuntimeLogConfigurations: Shapes\RuntimeLogConfigurations
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
