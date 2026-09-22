<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AWS_CONFIG_SLREC'|'SLACK'|'EXTERNAL_AGENT'|'AWS_INTEGRATION'|null $integrationType
 * @property 'ACTIVE'|'DELETED'|'PENDING'|'PENDING_OAUTH'|'ERROR'|'FAILED'|null $status
 * @property string|null $name
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     integrationType?: 'AWS_CONFIG_SLREC'|'SLACK'|'EXTERNAL_AGENT'|'AWS_INTEGRATION'|null,
     *     status?: 'ACTIVE'|'DELETED'|'PENDING'|'PENDING_OAUTH'|'ERROR'|'FAILED'|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
