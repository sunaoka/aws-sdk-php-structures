<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnectorV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ConnectorArn
 * @property string $ConnectorId
 * @property string|null $AuthUrl
 * @property 'CONNECTED'|'FAILED_TO_CONNECT'|'PENDING_CONFIGURATION'|'PENDING_AUTHORIZATION'|null $ConnectorStatus
 */
class CreateConnectorV2Response extends Response
{
}
