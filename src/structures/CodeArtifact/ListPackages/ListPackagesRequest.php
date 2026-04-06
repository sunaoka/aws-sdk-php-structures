<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null $format
 * @property string|null $namespace
 * @property string|null $packagePrefix
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'ALLOW'|'BLOCK'|null $publish
 * @property 'ALLOW'|'BLOCK'|null $upstream
 */
class ListPackagesRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null,
     *     namespace?: string|null,
     *     packagePrefix?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     publish?: 'ALLOW'|'BLOCK'|null,
     *     upstream?: 'ALLOW'|'BLOCK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
