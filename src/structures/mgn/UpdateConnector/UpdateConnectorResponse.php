<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $connectorID
 * @property string $name
 * @property Shapes\ConnectorSsmCommandConfig $ssmCommandConfig
 * @property string $ssmInstanceID
 * @property array<string, string> $tags
 */
class UpdateConnectorResponse extends Response
{
}
