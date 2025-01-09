<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\GetPackageVersionReadme;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property string $version
 * @property string $versionRevision
 * @property string $readme
 */
class GetPackageVersionReadmeResponse extends Response
{
}
