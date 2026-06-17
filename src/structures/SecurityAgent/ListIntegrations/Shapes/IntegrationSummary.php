<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $installationId
 * @property 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE' $provider
 * @property 'SOURCE_CODE'|'DOCUMENTATION' $providerType
 * @property string $displayName
 * @property string|null $targetUrl
 * @property string|null $privateConnectionName
 */
class IntegrationSummary extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     installationId: string,
     *     provider: 'GITHUB'|'GITLAB'|'BITBUCKET'|'CONFLUENCE',
     *     providerType: 'SOURCE_CODE'|'DOCUMENTATION',
     *     displayName: string,
     *     targetUrl?: string|null,
     *     privateConnectionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
