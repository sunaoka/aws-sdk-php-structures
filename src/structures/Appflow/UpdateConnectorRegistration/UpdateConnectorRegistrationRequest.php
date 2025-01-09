<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorLabel
 * @property string $description
 * @property Shapes\ConnectorProvisioningConfig $connectorProvisioningConfig
 * @property string $clientToken
 */
class UpdateConnectorRegistrationRequest extends Request
{
    /**
     * @param array{
     *     connectorLabel: string,
     *     description?: string,
     *     connectorProvisioningConfig?: Shapes\ConnectorProvisioningConfig,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
