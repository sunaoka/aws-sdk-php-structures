<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConnectorConfiguration $ConnectorConfiguration
 * @property string $RoleArn
 * @property string $Name
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     ConnectorConfiguration: Shapes\ConnectorConfiguration,
     *     RoleArn: string,
     *     Name: string,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
