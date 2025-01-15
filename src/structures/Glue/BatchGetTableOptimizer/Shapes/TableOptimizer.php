<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTableOptimizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'compaction'|'retention'|'orphan_file_deletion'|null $type
 * @property TableOptimizerConfiguration|null $configuration
 * @property TableOptimizerRun|null $lastRun
 */
class TableOptimizer extends Shape
{
    /**
     * @param array{
     *     type?: 'compaction'|'retention'|'orphan_file_deletion'|null,
     *     configuration?: TableOptimizerConfiguration|null,
     *     lastRun?: TableOptimizerRun|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
