<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteCustomDBEngineVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageId
 * @property string $Status
 */
class CustomDBEngineVersionAMI extends Shape
{
    /**
     * @param array{
     *     ImageId?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
