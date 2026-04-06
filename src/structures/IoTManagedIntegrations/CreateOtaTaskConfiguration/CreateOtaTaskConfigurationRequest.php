<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTaskConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string|null $Name
 * @property Shapes\PushConfig|null $PushConfig
 * @property string|null $ClientToken
 */
class CreateOtaTaskConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name?: string|null,
     *     PushConfig?: Shapes\PushConfig|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
