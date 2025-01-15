<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateServerlessCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Maximum
 * @property int|null $Minimum
 * @property 'GB' $Unit
 */
class DataStorage extends Shape
{
    /**
     * @param array{
     *     Maximum?: int|null,
     *     Minimum?: int|null,
     *     Unit: 'GB'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
