<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetCloudConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property Shapes\EndpointConfig $EndpointConfig
 * @property string|null $Description
 * @property 'LAMBDA'|null $EndpointType
 * @property string|null $Id
 * @property 'LISTED'|'UNLISTED'|null $Type
 */
class GetCloudConnectorResponse extends Response
{
}
