<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConnectorArn
 * @property string $ConnectorId
 * @property string $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property Shapes\CspmHealthCheck $Health
 * @property Shapes\CspmProviderDetail $ProviderDetail
 * @property string|null $CreatedBy
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'PENDING_UPDATE'|'PENDING_DELETION'|null $EnablementStatus
 */
class GetConnectorResponse extends Response
{
}
