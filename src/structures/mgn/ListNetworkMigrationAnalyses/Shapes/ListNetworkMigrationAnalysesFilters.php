<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationAnalyses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $jobIDs
 */
class ListNetworkMigrationAnalysesFilters extends Shape
{
    /**
     * @param array{jobIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
