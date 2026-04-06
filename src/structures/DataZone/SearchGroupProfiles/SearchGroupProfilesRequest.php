<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchGroupProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'SSO_GROUP'|'DATAZONE_SSO_GROUP' $groupType
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $searchText
 */
class SearchGroupProfilesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     groupType: 'SSO_GROUP'|'DATAZONE_SSO_GROUP',
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     searchText?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
