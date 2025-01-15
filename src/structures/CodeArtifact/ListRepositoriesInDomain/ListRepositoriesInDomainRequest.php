<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListRepositoriesInDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string|null $administratorAccount
 * @property string|null $repositoryPrefix
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListRepositoriesInDomainRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     administratorAccount?: string|null,
     *     repositoryPrefix?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
