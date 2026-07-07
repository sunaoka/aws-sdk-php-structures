<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'UNKNOWN'|null $ConnectorStatus
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'PENDING_UPDATE'|'PENDING_DELETION'|null $EnablementStatus
 */
class UpdateConnectorResponse extends Response
{
}
