<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string|null $namespace
 * @property string $package
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null $status
 * @property 'PUBLISHED_TIME'|null $sortBy
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'INTERNAL'|'EXTERNAL'|'UNKNOWN'|null $originType
 */
class ListPackageVersionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string|null,
     *     package: string,
     *     status?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null,
     *     sortBy?: 'PUBLISHED_TIME'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     originType?: 'INTERNAL'|'EXTERNAL'|'UNKNOWN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
