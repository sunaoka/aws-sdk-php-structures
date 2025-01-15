<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateProvisioningArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProvisioningArtifactDetail|null $ProvisioningArtifactDetail
 * @property array<string, string>|null $Info
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|null $Status
 */
class UpdateProvisioningArtifactResponse extends Response
{
}
