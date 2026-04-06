<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListPackageVersionDependencies;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null $format
 * @property string|null $namespace
 * @property string|null $package
 * @property string|null $version
 * @property string|null $versionRevision
 * @property string|null $nextToken
 * @property list<Shapes\PackageDependency>|null $dependencies
 */
class ListPackageVersionDependenciesResponse extends Response
{
}
