<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $integrationName
 * @property 'OPENSEARCH'|null $integrationType
 * @property 'PROVISIONING'|'ACTIVE'|'FAILED'|null $integrationStatus
 */
class IntegrationSummary extends Shape
{
    /**
     * @param array{
     *     integrationName?: string|null,
     *     integrationType?: 'OPENSEARCH'|null,
     *     integrationStatus?: 'PROVISIONING'|'ACTIVE'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
