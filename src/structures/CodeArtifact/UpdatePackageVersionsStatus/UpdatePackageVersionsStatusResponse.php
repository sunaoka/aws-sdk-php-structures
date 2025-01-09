<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageVersionsStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\SuccessfulPackageVersionInfo> $successfulVersions
 * @property array<string, Shapes\PackageVersionError> $failedVersions
 */
class UpdatePackageVersionsStatusResponse extends Response
{
}
