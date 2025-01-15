<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListAllowedRepositoriesForGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $packageGroup
 * @property 'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH' $originRestrictionType
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListAllowedRepositoriesForGroupRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     packageGroup: string,
     *     originRestrictionType: 'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH',
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
