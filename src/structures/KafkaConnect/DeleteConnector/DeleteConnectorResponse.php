<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $connectorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $connectorState
 */
class DeleteConnectorResponse extends Response
{
}
