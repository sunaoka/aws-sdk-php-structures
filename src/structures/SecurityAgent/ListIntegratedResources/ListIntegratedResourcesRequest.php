<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|null $integrationId
 * @property 'CODE_REPOSITORY'|null $resourceType
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListIntegratedResourcesRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     integrationId?: string|null,
     *     resourceType?: 'CODE_REPOSITORY'|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
