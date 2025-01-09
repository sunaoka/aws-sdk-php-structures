<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeProduct;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ProductViewSummary $ProductViewSummary
 * @property list<Shapes\ProvisioningArtifact> $ProvisioningArtifacts
 * @property list<Shapes\BudgetDetail> $Budgets
 * @property list<Shapes\LaunchPath> $LaunchPaths
 */
class DescribeProductResponse extends Response
{
}
