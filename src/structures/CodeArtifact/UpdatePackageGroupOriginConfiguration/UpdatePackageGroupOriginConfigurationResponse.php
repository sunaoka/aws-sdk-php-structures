<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\UpdatePackageGroupOriginConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\PackageGroupDescription|null $packageGroup
 * @property array<'EXTERNAL_UPSTREAM'|'INTERNAL_UPSTREAM'|'PUBLISH', array<'ADDED'|'REMOVED', list<string>>>|null $allowedRepositoryUpdates
 */
class UpdatePackageGroupOriginConfigurationResponse extends Response
{
}
