<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostCategories;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextPageToken
 * @property list<string>|null $CostCategoryNames
 * @property list<string>|null $CostCategoryValues
 * @property int $ReturnSize
 * @property int $TotalSize
 */
class GetCostCategoriesResponse extends Response
{
}
