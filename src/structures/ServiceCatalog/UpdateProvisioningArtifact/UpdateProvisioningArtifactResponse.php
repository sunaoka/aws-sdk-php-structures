<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisioningArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProvisioningArtifactDetail $ProvisioningArtifactDetail
 * @property array<string, string> $Info
 * @property 'AVAILABLE'|'CREATING'|'FAILED' $Status
 */
class UpdateProvisioningArtifactResponse extends Response
{
}
