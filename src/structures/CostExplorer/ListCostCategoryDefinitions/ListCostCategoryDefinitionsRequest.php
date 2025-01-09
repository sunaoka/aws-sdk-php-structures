<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EffectiveOn
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListCostCategoryDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     EffectiveOn?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
