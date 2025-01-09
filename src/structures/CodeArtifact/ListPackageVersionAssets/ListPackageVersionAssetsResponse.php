<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersionAssets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property string $version
 * @property string $versionRevision
 * @property string $nextToken
 * @property list<Shapes\AssetSummary> $assets
 */
class ListPackageVersionAssetsResponse extends Response
{
}
