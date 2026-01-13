<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $projectIdentifier
 * @property 'NAME'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListProjectMembershipsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     projectIdentifier: string,
     *     sortBy?: 'NAME'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
