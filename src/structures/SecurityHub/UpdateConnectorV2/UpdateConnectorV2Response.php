<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateConnectorV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CONNECTED'|'DEGRADED'|'FAILED_TO_CONNECT'|'PENDING_AUTHORIZATION'|'PENDING_CONFIGURATION'|'UNKNOWN'|null $ConnectorStatus
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'FAILED_TO_ENABLE'|'PENDING_UPDATE'|'FAILED_TO_UPDATE'|'PENDING_DELETION'|'FAILED_TO_DELETE'|null $EnablementStatus
 */
class UpdateConnectorV2Response extends Response
{
}
