<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int $maxResults
 * @property string $nextToken
 * @property string $projectIdentifier
 * @property 'NAME' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListProjectMembershipsRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     projectIdentifier: string,
     *     sortBy?: 'NAME',
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
