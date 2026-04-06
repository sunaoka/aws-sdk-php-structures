<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConnectionType
 * @property 'REST' $IntegrationType
 * @property string|null $Description
 * @property Shapes\ConnectionPropertiesConfiguration $ConnectionProperties
 * @property Shapes\ConnectorAuthenticationConfiguration $ConnectorAuthenticationConfiguration
 * @property Shapes\RestConfiguration $RestConfiguration
 * @property array<string, string>|null $Tags
 */
class RegisterConnectionTypeRequest extends Request
{
    /**
     * @param array{
     *     ConnectionType: string,
     *     IntegrationType: 'REST',
     *     Description?: string|null,
     *     ConnectionProperties: Shapes\ConnectionPropertiesConfiguration,
     *     ConnectorAuthenticationConfiguration: Shapes\ConnectorAuthenticationConfiguration,
     *     RestConfiguration: Shapes\RestConfiguration,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
