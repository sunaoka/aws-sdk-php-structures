<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetConnectorV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConnectorArn
 * @property string $ConnectorId
 * @property string $Name
 * @property string|null $Description
 * @property string|null $KmsKeyArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property Shapes\HealthCheck $Health
 * @property Shapes\ProviderDetail $ProviderDetail
 * @property 'ENABLED'|'PENDING_ENABLEMENT'|'FAILED_TO_ENABLE'|'PENDING_UPDATE'|'FAILED_TO_UPDATE'|'PENDING_DELETION'|'FAILED_TO_DELETE'|null $EnablementStatus
 * @property string|null $EnablementStatusReason
 */
class GetConnectorV2Response extends Response
{
}
