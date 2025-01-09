<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationName
 * @property 'OPENSEARCH' $integrationType
 * @property 'PROVISIONING'|'ACTIVE'|'FAILED' $integrationStatus
 */
class IntegrationSummary extends Shape
{
    /**
     * @param array{
     *     integrationName?: string,
     *     integrationType?: 'OPENSEARCH',
     *     integrationStatus?: 'PROVISIONING'|'ACTIVE'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
