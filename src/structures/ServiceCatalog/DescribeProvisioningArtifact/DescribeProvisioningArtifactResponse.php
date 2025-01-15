<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProvisioningArtifactDetail|null $ProvisioningArtifactDetail
 * @property array<string, string>|null $Info
 * @property 'AVAILABLE'|'CREATING'|'FAILED'|null $Status
 * @property list<Shapes\ProvisioningArtifactParameter>|null $ProvisioningArtifactParameters
 */
class DescribeProvisioningArtifactResponse extends Response
{
}
