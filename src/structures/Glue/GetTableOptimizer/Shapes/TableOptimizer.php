<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'compaction'|'retention'|'orphan_file_deletion' $type
 * @property TableOptimizerConfiguration $configuration
 * @property TableOptimizerRun $lastRun
 */
class TableOptimizer extends Shape
{
    /**
     * @param array{
     *     type?: 'compaction'|'retention'|'orphan_file_deletion',
     *     configuration?: TableOptimizerConfiguration,
     *     lastRun?: TableOptimizerRun
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
