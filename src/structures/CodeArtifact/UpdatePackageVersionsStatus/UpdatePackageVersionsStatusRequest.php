<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageVersionsStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string|null $namespace
 * @property string $package
 * @property list<string> $versions
 * @property array<string, string>|null $versionRevisions
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null $expectedStatus
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted' $targetStatus
 */
class UpdatePackageVersionsStatusRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string|null,
     *     package: string,
     *     versions: list<string>,
     *     versionRevisions?: array<string, string>|null,
     *     expectedStatus?: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null,
     *     targetStatus: 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
