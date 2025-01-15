<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProvisioningParameters;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ProvisioningArtifactParameter>|null $ProvisioningArtifactParameters
 * @property list<Shapes\ConstraintSummary>|null $ConstraintSummaries
 * @property list<Shapes\UsageInstruction>|null $UsageInstructions
 * @property list<Shapes\TagOptionSummary>|null $TagOptions
 * @property Shapes\ProvisioningArtifactPreferences|null $ProvisioningArtifactPreferences
 * @property list<Shapes\ProvisioningArtifactOutput>|null $ProvisioningArtifactOutputs
 * @property list<Shapes\ProvisioningArtifactOutput>|null $ProvisioningArtifactOutputKeys
 */
class DescribeProvisioningParametersResponse extends Response
{
}
