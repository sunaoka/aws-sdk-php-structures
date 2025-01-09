<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileSystemId
 * @property string $Path
 */
class EfsFileLocation extends Shape
{
    /**
     * @param array{
     *     FileSystemId?: string,
     *     Path?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
