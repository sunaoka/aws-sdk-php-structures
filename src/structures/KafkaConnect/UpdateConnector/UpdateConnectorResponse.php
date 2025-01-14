<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $connectorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $connectorState
 * @property string $connectorOperationArn
 */
class UpdateConnectorResponse extends Response
{
}
