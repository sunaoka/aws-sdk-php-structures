<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListSubPackageGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $packageGroup
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListSubPackageGroupsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     packageGroup: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
