<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProductAsAdmin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProductViewDetail|null $ProductViewDetail
 * @property list<Shapes\ProvisioningArtifactSummary>|null $ProvisioningArtifactSummaries
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\TagOptionDetail>|null $TagOptions
 * @property list<Shapes\BudgetDetail>|null $Budgets
 */
class DescribeProductAsAdminResponse extends Response
{
}
