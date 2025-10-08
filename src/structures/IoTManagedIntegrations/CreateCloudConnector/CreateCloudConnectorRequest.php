<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateCloudConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\EndpointConfig $EndpointConfig
 * @property string|null $Description
 * @property 'LAMBDA'|null $EndpointType
 * @property string|null $ClientToken
 */
class CreateCloudConnectorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EndpointConfig: Shapes\EndpointConfig,
     *     Description?: string|null,
     *     EndpointType?: 'LAMBDA'|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
