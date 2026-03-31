<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationId
 * @property string $installationId
 * @property 'GITHUB' $provider
 * @property 'SOURCE_CODE'|'DOCUMENTATION' $providerType
 * @property string|null $displayName
 * @property string|null $kmsKeyId
 */
class GetIntegrationResponse extends Response
{
}
