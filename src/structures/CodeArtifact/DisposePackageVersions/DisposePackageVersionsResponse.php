<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DisposePackageVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\SuccessfulPackageVersionInfo>|null $successfulVersions
 * @property array<string, Shapes\PackageVersionError>|null $failedVersions
 */
class DisposePackageVersionsResponse extends Response
{
}
