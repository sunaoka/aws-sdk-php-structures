<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workGroup
 * @property string|null $outputLocation
 * @property string $databaseName
 * @property string $tableName
 */
class AthenaTableReference extends Shape
{
    /**
     * @param array{
     *     workGroup: string,
     *     outputLocation?: string|null,
     *     databaseName: string,
     *     tableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
