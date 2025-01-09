<?php

namespace Sunaoka\Aws\Structures\Appflow\RegisterConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorLabel
 * @property string $description
 * @property 'LAMBDA' $connectorProvisioningType
 * @property Shapes\ConnectorProvisioningConfig $connectorProvisioningConfig
 * @property string $clientToken
 */
class RegisterConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorLabel?: string,
     *     description?: string,
     *     connectorProvisioningType?: 'LAMBDA',
     *     connectorProvisioningConfig?: Shapes\ConnectorProvisioningConfig,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
