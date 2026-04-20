<?php

namespace Sunaoka\Aws\Structures\LocationService\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Parquet' $Format
 * @property string $Location
 */
class JobOutputOptions extends Shape
{
    /**
     * @param array{
     *     Format: 'Parquet',
     *     Location: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
