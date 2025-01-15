<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBLogFiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LogFileName
 * @property int|null $LastWritten
 * @property int|null $Size
 */
class DescribeDBLogFilesDetails extends Shape
{
    /**
     * @param array{
     *     LogFileName?: string|null,
     *     LastWritten?: int|null,
     *     Size?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
