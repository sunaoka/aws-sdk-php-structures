<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CostCategoryArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListCostCategoryResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     CostCategoryArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
