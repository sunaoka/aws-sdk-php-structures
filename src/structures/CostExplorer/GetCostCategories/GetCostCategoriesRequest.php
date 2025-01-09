<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostCategories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SearchString
 * @property Shapes\DateInterval $TimePeriod
 * @property string $CostCategoryName
 * @property Shapes\Expression $Filter
 * @property list<Shapes\SortDefinition> $SortBy
 * @property string $BillingViewArn
 * @property int<1, max> $MaxResults
 * @property string $NextPageToken
 */
class GetCostCategoriesRequest extends Request
{
    /**
     * @param array{
     *     SearchString?: string,
     *     TimePeriod: Shapes\DateInterval,
     *     CostCategoryName?: string,
     *     Filter?: Shapes\Expression,
     *     SortBy?: list<Shapes\SortDefinition>,
     *     BillingViewArn?: string,
     *     MaxResults?: int<1, max>,
     *     NextPageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
