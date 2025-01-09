<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $packagePrefix
 * @property int $maxResults
 * @property string $nextToken
 * @property 'ALLOW'|'BLOCK' $publish
 * @property 'ALLOW'|'BLOCK' $upstream
 */
class ListPackagesRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     format?: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     packagePrefix?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     publish?: 'ALLOW'|'BLOCK',
     *     upstream?: 'ALLOW'|'BLOCK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
