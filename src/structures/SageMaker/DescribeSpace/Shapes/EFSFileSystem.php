<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileSystemId
 */
class EFSFileSystem extends Shape
{
    /**
     * @param array{FileSystemId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
