<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50> $maxResults
 * @property string $name
 * @property string $nextToken
 * @property 'NAME' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 */
class ListProjectProfilesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>,
     *     name?: string,
     *     nextToken?: string,
     *     sortBy?: 'NAME',
     *     sortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
