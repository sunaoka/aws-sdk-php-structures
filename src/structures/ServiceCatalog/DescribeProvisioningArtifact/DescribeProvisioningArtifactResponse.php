<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProvisioningArtifactDetail $ProvisioningArtifactDetail
 * @property array<string, string> $Info
 * @property 'AVAILABLE'|'CREATING'|'FAILED' $Status
 * @property list<Shapes\ProvisioningArtifactParameter> $ProvisioningArtifactParameters
 */
class DescribeProvisioningArtifactResponse extends Response
{
}
