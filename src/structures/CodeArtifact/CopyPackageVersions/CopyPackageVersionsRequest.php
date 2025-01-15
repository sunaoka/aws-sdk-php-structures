<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CopyPackageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string|null $domainOwner
 * @property string $sourceRepository
 * @property string $destinationRepository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string|null $namespace
 * @property string $package
 * @property list<string>|null $versions
 * @property array<string, string>|null $versionRevisions
 * @property bool|null $allowOverwrite
 * @property bool|null $includeFromUpstream
 */
class CopyPackageVersionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string|null,
     *     sourceRepository: string,
     *     destinationRepository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string|null,
     *     package: string,
     *     versions?: list<string>|null,
     *     versionRevisions?: array<string, string>|null,
     *     allowOverwrite?: bool|null,
     *     includeFromUpstream?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
