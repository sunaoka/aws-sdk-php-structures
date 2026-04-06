<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $connectorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $connectorState
 * @property string|null $connectorOperationArn
 */
class UpdateConnectorResponse extends Response
{
}
