<?php

namespace Sunaoka\Aws\Structures\mgn\CreateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $connectorID
 * @property string $name
 * @property Shapes\ConnectorSsmCommandConfig $ssmCommandConfig
 * @property string $ssmInstanceID
 * @property array<string, string> $tags
 */
class CreateConnectorResponse extends Response
{
}
