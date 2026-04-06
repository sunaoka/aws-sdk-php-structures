<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string $projectIdentifier
 * @property 'NAME'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 */
class ListProjectMembershipsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     projectIdentifier: string,
     *     sortBy?: 'NAME'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
