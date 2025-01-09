<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property list<string> $versions
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted' $expectedStatus
 */
class DeletePackageVersionsRequest extends Request
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
     *     expectedStatus?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
