<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationNamePrefix
 * @property 'OPENSEARCH' $integrationType
 * @property 'PROVISIONING'|'ACTIVE'|'FAILED' $integrationStatus
 */
class ListIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     integrationNamePrefix?: string,
     *     integrationType?: 'OPENSEARCH',
     *     integrationStatus?: 'PROVISIONING'|'ACTIVE'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
