<?php

namespace Sunaoka\Aws\Structures\Appflow\RegisterConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $connectorLabel
 * @property string|null $description
 * @property 'LAMBDA'|null $connectorProvisioningType
 * @property Shapes\ConnectorProvisioningConfig|null $connectorProvisioningConfig
 * @property string|null $clientToken
 */
class RegisterConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorLabel?: string|null,
     *     description?: string|null,
     *     connectorProvisioningType?: 'LAMBDA'|null,
     *     connectorProvisioningConfig?: Shapes\ConnectorProvisioningConfig|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
