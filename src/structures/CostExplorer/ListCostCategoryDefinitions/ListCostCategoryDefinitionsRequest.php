<?php

namespace Sunaoka\Aws\Structures\CostExplorer\ListCostCategoryDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EffectiveOn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<string>|null $SupportedResourceTypes
 */
class ListCostCategoryDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     EffectiveOn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SupportedResourceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
