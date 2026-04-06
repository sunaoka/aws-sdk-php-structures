<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EFSFileSystemConfig|null $EFSFileSystemConfig
 */
class CustomFileSystemConfig extends Shape
{
    /**
     * @param array{EFSFileSystemConfig?: EFSFileSystemConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
