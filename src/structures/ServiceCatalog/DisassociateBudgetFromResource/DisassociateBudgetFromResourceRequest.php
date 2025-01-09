<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DisassociateBudgetFromResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BudgetName
 * @property string $ResourceId
 */
class DisassociateBudgetFromResourceRequest extends Request
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
