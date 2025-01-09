<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property int $revisionNumber
 */
class DependencyRevision extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     revisionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
