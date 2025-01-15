<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $connectorArn
 * @property string|null $connectorName
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $connectorState
 */
class CreateConnectorResponse extends Response
{
}
