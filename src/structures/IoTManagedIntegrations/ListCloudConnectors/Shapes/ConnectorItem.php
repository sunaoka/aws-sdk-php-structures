<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListCloudConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property EndpointConfig $EndpointConfig
 * @property string|null $Description
 * @property 'LAMBDA'|null $EndpointType
 * @property string|null $Id
 * @property 'LISTED'|'UNLISTED'|null $Type
 */
class ConnectorItem extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     EndpointConfig: EndpointConfig,
     *     Description?: string|null,
     *     EndpointType?: 'LAMBDA'|null,
     *     Id?: string|null,
     *     Type?: 'LISTED'|'UNLISTED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
