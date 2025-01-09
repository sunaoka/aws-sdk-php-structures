<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PublishPackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo' $format
 * @property string $namespace
 * @property string $package
 * @property string $version
 * @property string $versionRevision
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted' $status
 * @property Shapes\AssetSummary $asset
 */
class PublishPackageVersionResponse extends Response
{
}
