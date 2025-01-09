<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateProvisioningArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProvisioningArtifactDetail $ProvisioningArtifactDetail
 * @property array<string, string> $Info
 * @property 'AVAILABLE'|'CREATING'|'FAILED' $Status
 */
class CreateProvisioningArtifactResponse extends Response
{
}
