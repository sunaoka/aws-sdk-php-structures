<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMappingUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $jobIDs
 */
class ListNetworkMigrationMappingUpdatesFilters extends Shape
{
    /**
     * @param array{jobIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
