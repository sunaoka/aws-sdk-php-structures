<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProduct;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProductViewSummary|null $ProductViewSummary
 * @property list<Shapes\ProvisioningArtifact>|null $ProvisioningArtifacts
 * @property list<Shapes\BudgetDetail>|null $Budgets
 * @property list<Shapes\LaunchPath>|null $LaunchPaths
 */
class DescribeProductResponse extends Response
{
}
