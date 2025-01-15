<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DescribeCostCategoryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CostCategoryArn
 * @property string|null $EffectiveOn
 */
class DescribeCostCategoryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     CostCategoryArn: string,
     *     EffectiveOn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
