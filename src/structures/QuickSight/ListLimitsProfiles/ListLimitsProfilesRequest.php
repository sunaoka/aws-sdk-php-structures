<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListLimitsProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property 'INDEX_STORAGE'|'AGENT_HOURS'|null $resourceType
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListLimitsProfilesRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     resourceType?: 'INDEX_STORAGE'|'AGENT_HOURS'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
