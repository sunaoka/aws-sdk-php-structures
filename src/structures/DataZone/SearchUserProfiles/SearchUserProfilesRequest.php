<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchUserProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $searchText
 * @property 'SSO_USER'|'DATAZONE_USER'|'DATAZONE_SSO_USER'|'DATAZONE_IAM_USER' $userType
 */
class SearchUserProfilesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null,
     *     searchText?: string|null,
     *     userType: 'SSO_USER'|'DATAZONE_USER'|'DATAZONE_SSO_USER'|'DATAZONE_IAM_USER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
