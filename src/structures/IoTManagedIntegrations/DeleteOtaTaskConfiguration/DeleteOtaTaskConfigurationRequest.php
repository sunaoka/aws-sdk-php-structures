<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteOtaTaskConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteOtaTaskConfigurationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
