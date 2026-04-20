<?php

namespace Sunaoka\Aws\Structures\LocationService\StartJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 * @property 'Parquet' $Format
 */
class JobInputOptions extends Shape
{
    /**
     * @param array{
     *     Location: string,
     *     Format: 'Parquet'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
