<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CopyPackageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $sourceRepository
 * @property string $destinationRepository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property list<string> $versions
 * @property array<string, string> $versionRevisions
 * @property bool $allowOverwrite
 * @property bool $includeFromUpstream
 */
class CopyPackageVersionsRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     sourceRepository: string,
     *     destinationRepository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     package: string,
     *     versions?: list<string>,
     *     versionRevisions?: array<string, string>,
     *     allowOverwrite?: bool,
     *     includeFromUpstream?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
