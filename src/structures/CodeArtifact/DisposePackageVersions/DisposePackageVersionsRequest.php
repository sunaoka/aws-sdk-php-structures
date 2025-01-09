<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DisposePackageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property list<string> $versions
 * @property array<string, string> $versionRevisions
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted' $expectedStatus
 */
class DisposePackageVersionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     package: string,
     *     versions: list<string>,
     *     versionRevisions?: array<string, string>,
     *     expectedStatus?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
