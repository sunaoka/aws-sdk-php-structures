<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribePortfolio;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\PortfolioDetail|null $PortfolioDetail
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\TagOptionDetail>|null $TagOptions
 * @property list<Shapes\BudgetDetail>|null $Budgets
 */
class DescribePortfolioResponse extends Response
{
}
