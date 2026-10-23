<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationId
 * @property string $integrationArn
 * @property string $name
 * @property 'GITHUB'|'GITLAB'|'S3' $integrationType
 * @property Shapes\ProviderDetails $providerDetails
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateIntegrationResponse extends Response
{
}
