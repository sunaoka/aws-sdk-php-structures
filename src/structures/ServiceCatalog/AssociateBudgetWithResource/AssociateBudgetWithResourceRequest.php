<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\AssociateBudgetWithResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BudgetName
 * @property string $ResourceId
 */
class AssociateBudgetWithResourceRequest extends Request
{
    /**
     * @param array{
     *     BudgetName: string,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
