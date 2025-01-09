<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetTableOptimizerEntry> $Entries
 */
class BatchGetTableOptimizerRequest extends Request
{
    /**
     * @param array{Entries: list<Shapes\BatchGetTableOptimizerEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
