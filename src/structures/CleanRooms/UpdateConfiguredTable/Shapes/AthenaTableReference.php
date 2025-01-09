<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workGroup
 * @property string $outputLocation
 * @property string $databaseName
 * @property string $tableName
 */
class AthenaTableReference extends Shape
{
    /**
     * @param array{
     *     workGroup: string,
     *     outputLocation?: string,
     *     databaseName: string,
     *     tableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
