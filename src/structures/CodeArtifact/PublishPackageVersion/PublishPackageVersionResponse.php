<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\PublishPackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'npm'|'pypi'|'maven'|'nuget'|'generic'|'ruby'|'swift'|'cargo'|null $format
 * @property string|null $namespace
 * @property string|null $package
 * @property string|null $version
 * @property string|null $versionRevision
 * @property 'Published'|'Unfinished'|'Unlisted'|'Archived'|'Disposed'|'Deleted'|null $status
 * @property Shapes\AssetSummary|null $asset
 */
class PublishPackageVersionResponse extends Response
{
}
