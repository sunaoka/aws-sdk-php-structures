<?php

namespace Sunaoka\Aws\Structures\mgn\CreateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $connectorID
 * @property string|null $name
 * @property string|null $ssmInstanceID
 * @property string|null $arn
 * @property array<string, string>|null $tags
 * @property Shapes\ConnectorSsmCommandConfig|null $ssmCommandConfig
 */
class CreateConnectorResponse extends Response
{
}
