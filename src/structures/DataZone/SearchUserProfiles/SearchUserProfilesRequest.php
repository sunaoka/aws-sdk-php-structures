<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchUserProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property 'SSO_USER'|'DATAZONE_USER'|'DATAZONE_SSO_USER'|'DATAZONE_IAM_USER' $userType
 * @property string|null $searchText
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class SearchUserProfilesRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     userType: 'SSO_USER'|'DATAZONE_USER'|'DATAZONE_SSO_USER'|'DATAZONE_IAM_USER',
     *     searchText?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
