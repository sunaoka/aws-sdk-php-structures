<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersionAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string|null $namespace
 * @property string $package
 * @property string $packageVersion
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListPackageVersionAssetsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string|null,
     *     package: string,
     *     packageVersion: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
