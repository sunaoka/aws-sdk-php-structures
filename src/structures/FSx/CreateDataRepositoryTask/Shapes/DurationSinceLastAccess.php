<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DAYS' $Unit
 * @property int<0, max> $Value
 */
class DurationSinceLastAccess extends Shape
{
    /**
     * @param array{
     *     Unit?: 'DAYS',
     *     Value?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
