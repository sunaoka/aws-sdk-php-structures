<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfDatabases
 * @property int|null $NumberOfSchemas
 */
class InventoryData extends Shape
{
    /**
     * @param array{
     *     NumberOfDatabases?: int|null,
     *     NumberOfSchemas?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
