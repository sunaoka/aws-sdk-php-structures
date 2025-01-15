<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorLabel
 * @property string|null $description
 * @property Shapes\ConnectorProvisioningConfig|null $connectorProvisioningConfig
 * @property string|null $clientToken
 */
class UpdateConnectorRegistrationRequest extends Request
{
    /**
     * @param array{
     *     connectorLabel: string,
     *     description?: string|null,
     *     connectorProvisioningConfig?: Shapes\ConnectorProvisioningConfig|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
