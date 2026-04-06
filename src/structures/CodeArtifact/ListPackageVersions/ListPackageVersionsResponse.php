<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $defaultDisplayVersion
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|null $format
 * @property string|null $namespace
 * @property string|null $package
 * @property list<Shapes\PackageVersionSummary>|null $versions
 * @property string|null $nextToken
 */
class ListPackageVersionsResponse extends Response
{
}
