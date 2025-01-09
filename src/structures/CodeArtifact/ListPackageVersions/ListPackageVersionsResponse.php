<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $defaultDisplayVersion
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property list<Shapes\PackageVersionSummary> $versions
 * @property string $nextToken
 */
class ListPackageVersionsResponse extends Response
{
}
