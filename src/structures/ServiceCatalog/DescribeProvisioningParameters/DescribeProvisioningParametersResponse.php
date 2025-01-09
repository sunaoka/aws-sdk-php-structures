<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProvisioningArtifactParameter> $ProvisioningArtifactParameters
 * @property list<Shapes\ConstraintSummary> $ConstraintSummaries
 * @property list<Shapes\UsageInstruction> $UsageInstructions
 * @property list<Shapes\TagOptionSummary> $TagOptions
 * @property Shapes\ProvisioningArtifactPreferences $ProvisioningArtifactPreferences
 * @property list<Shapes\ProvisioningArtifactOutput> $ProvisioningArtifactOutputs
 * @property list<Shapes\ProvisioningArtifactOutput> $ProvisioningArtifactOutputKeys
 */
class DescribeProvisioningParametersResponse extends Response
{
}
