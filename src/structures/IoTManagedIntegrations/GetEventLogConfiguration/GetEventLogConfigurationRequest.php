<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetEventLogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetEventLogConfigurationRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
