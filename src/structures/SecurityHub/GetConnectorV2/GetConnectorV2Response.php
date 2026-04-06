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
 */
class GetConnectorV2Response extends Response
{
}
