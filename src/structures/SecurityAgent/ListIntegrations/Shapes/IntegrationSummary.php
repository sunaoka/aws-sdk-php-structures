<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property string $installationId
 * @property 'GITHUB' $provider
 * @property 'SOURCE_CODE'|'DOCUMENTATION' $providerType
 * @property string $displayName
 */
class IntegrationSummary extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     installationId: string,
     *     provider: 'GITHUB',
     *     providerType: 'SOURCE_CODE'|'DOCUMENTATION',
     *     displayName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
