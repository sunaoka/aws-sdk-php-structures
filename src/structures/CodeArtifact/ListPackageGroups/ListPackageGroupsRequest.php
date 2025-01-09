<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property string $prefix
 */
class ListPackageGroupsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
