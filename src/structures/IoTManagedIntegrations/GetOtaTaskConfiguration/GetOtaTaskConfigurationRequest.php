<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTaskConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetOtaTaskConfigurationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
