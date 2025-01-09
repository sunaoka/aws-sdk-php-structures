<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListAllowedRepositoriesForGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $packageGroup
 * @property 'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH' $originRestrictionType
 * @property int $maxResults
 * @property string $nextToken
 */
class ListAllowedRepositoriesForGroupRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     packageGroup: string,
     *     originRestrictionType: 'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH',
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
