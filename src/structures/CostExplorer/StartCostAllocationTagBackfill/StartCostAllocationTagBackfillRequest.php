<?php

namespace Sunaoka\Aws\Structures\CostExplorer\StartCostAllocationTagBackfill;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackfillFrom
 */
class StartCostAllocationTagBackfillRequest extends Request
{
    /**
     * @param array{BackfillFrom: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
