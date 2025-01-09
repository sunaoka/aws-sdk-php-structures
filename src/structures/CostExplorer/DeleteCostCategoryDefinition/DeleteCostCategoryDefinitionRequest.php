<?php

namespace Sunaoka\Aws\Structures\CostExplorer\DeleteCostCategoryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CostCategoryArn
 */
class DeleteCostCategoryDefinitionRequest extends Request
{
    /**
     * @param array{CostCategoryArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
