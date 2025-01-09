<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeletePackageVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\SuccessfulPackageVersionInfo> $successfulVersions
 * @property array<string, Shapes\PackageVersionError> $failedVersions
 */
class DeletePackageVersionsResponse extends Response
{
}
