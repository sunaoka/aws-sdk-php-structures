<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetProtectedQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 */
class IntermediateTableOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
