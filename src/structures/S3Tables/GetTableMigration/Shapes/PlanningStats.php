<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $objectsScanned
 * @property int|null $objectsPlanned
 * @property int|null $partitionCount
 */
class PlanningStats extends Shape
{
    /**
     * @param array{
     *     objectsScanned?: int|null,
     *     objectsPlanned?: int|null,
     *     partitionCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
