<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListRepositoriesInDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $administratorAccount
 * @property string $repositoryPrefix
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListRepositoriesInDomainRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     administratorAccount?: string,
     *     repositoryPrefix?: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
