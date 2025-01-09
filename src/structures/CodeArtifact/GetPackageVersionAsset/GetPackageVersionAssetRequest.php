<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetPackageVersionAsset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property string $domainOwner
 * @property string $repository
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property string $packageVersion
 * @property string $asset
 * @property string $packageVersionRevision
 */
class GetPackageVersionAssetRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     domainOwner?: string,
     *     repository: string,
     *     format: 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo',
     *     namespace?: string,
     *     package: string,
     *     packageVersion: string,
     *     asset: string,
     *     packageVersionRevision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
