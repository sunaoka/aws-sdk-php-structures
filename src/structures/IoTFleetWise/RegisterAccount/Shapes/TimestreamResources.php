<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\RegisterAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timestreamDatabaseName
 * @property string $timestreamTableName
 */
class TimestreamResources extends Shape
{
    /**
     * @param array{
     *     timestreamDatabaseName: string,
     *     timestreamTableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
