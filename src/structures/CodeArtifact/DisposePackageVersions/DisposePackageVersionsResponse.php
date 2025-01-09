<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DisposePackageVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\SuccessfulPackageVersionInfo> $successfulVersions
 * @property array<string, Shapes\PackageVersionError> $failedVersions
 */
class DisposePackageVersionsResponse extends Response
{
}
