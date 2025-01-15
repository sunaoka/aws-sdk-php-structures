<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DeleteConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $connectorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $connectorState
 */
class DeleteConnectorResponse extends Response
{
}
