<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $jobIDs
 */
class ListNetworkMigrationMappingsFilters extends Shape
{
    /**
     * @param array{jobIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
