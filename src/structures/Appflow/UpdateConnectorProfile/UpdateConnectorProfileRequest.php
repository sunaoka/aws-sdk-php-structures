<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorProfileName
 * @property 'Public'|'Private' $connectionMode
 * @property Shapes\ConnectorProfileConfig $connectorProfileConfig
 * @property string $clientToken
 */
class UpdateConnectorProfileRequest extends Request
{
    /**
     * @param array{
     *     connectorProfileName: string,
     *     connectionMode: 'Public'|'Private',
     *     connectorProfileConfig: Shapes\ConnectorProfileConfig,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
