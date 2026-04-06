<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\UpdateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $connectorArn
 * @property 'RUNNING'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'|null $connectorState
 */
class UpdateConnectorResponse extends Response
{
}
