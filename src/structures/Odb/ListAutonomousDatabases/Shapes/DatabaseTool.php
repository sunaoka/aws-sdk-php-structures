<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $isEnabled
 * @property string|null $name
 * @property double|null $computeCount
 * @property int|null $maxIdleTimeInMinutes
 */
class DatabaseTool extends Shape
{
    /**
     * @param array{
     *     isEnabled?: bool|null,
     *     name?: string|null,
     *     computeCount?: double|null,
     *     maxIdleTimeInMinutes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
