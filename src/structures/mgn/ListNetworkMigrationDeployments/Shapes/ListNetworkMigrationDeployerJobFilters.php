<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $jobIDs
 */
class ListNetworkMigrationDeployerJobFilters extends Shape
{
    /**
     * @param array{jobIDs?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
