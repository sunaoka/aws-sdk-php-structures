<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $agentSpaceId
 * @property 'USER'|'ALL'|null $memberType
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListMembershipsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     agentSpaceId: string,
     *     memberType?: 'USER'|'ALL'|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
