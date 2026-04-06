<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EffectiveOn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListCostCategoryDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     EffectiveOn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
