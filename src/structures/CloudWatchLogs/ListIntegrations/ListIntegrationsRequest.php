<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $integrationNamePrefix
 * @property 'OPENSEARCH'|null $integrationType
 * @property 'PROVISIONING'|'ACTIVE'|'FAILED'|null $integrationStatus
 */
class ListIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     integrationNamePrefix?: string|null,
     *     integrationType?: 'OPENSEARCH'|null,
     *     integrationStatus?: 'PROVISIONING'|'ACTIVE'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
