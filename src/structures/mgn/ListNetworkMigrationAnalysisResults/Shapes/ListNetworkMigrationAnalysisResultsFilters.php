<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationAnalysisResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $vpcIDs
 */
class ListNetworkMigrationAnalysisResultsFilters extends Shape
{
    /**
     * @param array{vpcIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
