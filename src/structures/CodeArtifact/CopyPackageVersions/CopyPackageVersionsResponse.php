<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CopyPackageVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\SuccessfulPackageVersionInfo> $successfulVersions
 * @property array<string, Shapes\PackageVersionError> $failedVersions
 */
class CopyPackageVersionsResponse extends Response
{
}
