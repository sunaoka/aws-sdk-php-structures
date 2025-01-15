<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $connectorID
 * @property string|null $name
 * @property Shapes\ConnectorSsmCommandConfig|null $ssmCommandConfig
 * @property string|null $ssmInstanceID
 * @property array<string, string>|null $tags
 */
class UpdateConnectorResponse extends Response
{
}
