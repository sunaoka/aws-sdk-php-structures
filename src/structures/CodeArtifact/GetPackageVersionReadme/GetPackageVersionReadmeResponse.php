<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetPackageVersionReadme;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null $format
 * @property string|null $namespace
 * @property string|null $package
 * @property string|null $version
 * @property string|null $versionRevision
 * @property string|null $readme
 */
class GetPackageVersionReadmeResponse extends Response
{
}
