<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string|null $name
 * @property 'NAME'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListProjectProfilesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     name?: string|null,
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
