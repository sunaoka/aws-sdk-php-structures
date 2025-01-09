<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBLogFiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogFileName
 * @property int $LastWritten
 * @property int $Size
 */
class DescribeDBLogFilesDetails extends Shape
{
    /**
     * @param array{
     *     LogFileName?: string,
     *     LastWritten?: int,
     *     Size?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
