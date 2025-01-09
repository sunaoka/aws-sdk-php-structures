<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CSVOutput $CSV
 * @property JSONOutput $JSON
 */
class OutputSerialization extends Shape
{
    /**
     * @param array{
     *     CSV?: CSVOutput,
     *     JSON?: JSONOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
