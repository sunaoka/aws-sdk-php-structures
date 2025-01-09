<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroupOriginConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\PackageGroupDescription $packageGroup
 * @property array<'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH', array<'ADDED'|'REMOVED', list<string>>> $allowedRepositoryUpdates
 */
class UpdatePackageGroupOriginConfigurationResponse extends Response
{
}
