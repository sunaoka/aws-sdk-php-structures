<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $connectorArn
 * @property string $connectorName
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $connectorState
 */
class CreateConnectorResponse extends Response
{
}
