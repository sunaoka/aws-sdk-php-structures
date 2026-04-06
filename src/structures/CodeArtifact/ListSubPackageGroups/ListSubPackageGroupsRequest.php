<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListSubPackageGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $packageGroup
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListSubPackageGroupsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     packageGroup: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
