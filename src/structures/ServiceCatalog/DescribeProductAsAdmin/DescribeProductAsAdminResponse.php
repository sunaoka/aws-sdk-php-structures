<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProductViewDetail $ProductViewDetail
 * @property list<Shapes\ProvisioningArtifactSummary> $ProvisioningArtifactSummaries
 * @property list<Shapes\Tag> $Tags
 * @property list<Shapes\TagOptionDetail> $TagOptions
 * @property list<Shapes\BudgetDetail> $Budgets
 */
class DescribeProductAsAdminResponse extends Response
{
}
