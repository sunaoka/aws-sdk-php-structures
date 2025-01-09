<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfDatabases
 * @property int $NumberOfSchemas
 */
class InventoryData extends Shape
{
    /**
     * @param array{
     *     NumberOfDatabases?: int,
     *     NumberOfSchemas?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
