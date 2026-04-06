<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EFSFileSystem|null $EFSFileSystem
 */
class CustomFileSystem extends Shape
{
    /**
     * @param array{EFSFileSystem?: EFSFileSystem|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
