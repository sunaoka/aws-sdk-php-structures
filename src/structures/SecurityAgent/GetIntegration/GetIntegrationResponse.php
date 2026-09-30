<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $integrationId
 * @property string $installationId
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE'|'AZURE_DEVOPS' $provider
 * @property 'SOURCE_CODE'|'DOCUMENTATION' $providerType
 * @property string|null $displayName
 * @property string|null $kmsKeyId
 * @property string|null $targetUrl
 * @property string|null $webhookUrl
 * @property string|null $privateConnectionName
 */
class GetIntegrationResponse extends Response
{
}
