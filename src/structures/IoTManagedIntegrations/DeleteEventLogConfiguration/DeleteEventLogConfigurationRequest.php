<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteEventLogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class DeleteEventLogConfigurationRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
