<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\IntegrationFilter|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\IntegrationFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
