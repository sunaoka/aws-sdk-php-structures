<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted' $status
 * @property 'PUBLISHED_TIME' $sortBy
 * @property int $maxResults
 * @property string $nextToken
 * @property 'INTERNAL'|'EXTERNAL'|'UNKNOWN' $originType
 */
class ListPackageVersionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     package: string,
     *     status?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted',
     *     sortBy?: 'PUBLISHED_TIME',
     *     maxResults?: int,
     *     nextToken?: string,
     *     originType?: 'INTERNAL'|'EXTERNAL'|'UNKNOWN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
