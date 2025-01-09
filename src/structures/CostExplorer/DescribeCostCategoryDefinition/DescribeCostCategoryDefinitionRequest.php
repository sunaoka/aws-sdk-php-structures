<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DescribeCostCategoryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CostCategoryArn
 * @property string $EffectiveOn
 */
class DescribeCostCategoryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     CostCategoryArn: string,
     *     EffectiveOn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
