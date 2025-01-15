<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CSVOutput|null $CSV
 * @property JSONOutput|null $JSON
 */
class OutputSerialization extends Shape
{
    /**
     * @param array{
     *     CSV?: CSVOutput|null,
     *     JSON?: JSONOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
