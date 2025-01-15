<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property int|null $revisionNumber
 */
class DependencyRevision extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     revisionNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
