<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\CopyPackageVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\SuccessfulPackageVersionInfo>|null $successfulVersions
 * @property array<string, Shapes\PackageVersionError>|null $failedVersions
 */
class CopyPackageVersionsResponse extends Response
{
}
