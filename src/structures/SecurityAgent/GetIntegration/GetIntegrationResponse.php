<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationId
 * @property string $installationId
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE' $provider
 * @property 'SOURCE_CODE'|'DOCUMENTATION' $providerType
 * @property string|null $displayName
 * @property string|null $kmsKeyId
 * @property string|null $targetUrl
 * @property string|null $privateConnectionName
 */
class GetIntegrationResponse extends Response
{
}
