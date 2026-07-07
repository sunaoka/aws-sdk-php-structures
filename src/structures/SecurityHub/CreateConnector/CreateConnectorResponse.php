<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConnectorArn
 * @property string $ConnectorId
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'UNKNOWN'|null $ConnectorStatus
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'PENDING_UPDATE'|'PENDING_DELETION'|null $EnablementStatus
 */
class CreateConnectorResponse extends Response
{
}
