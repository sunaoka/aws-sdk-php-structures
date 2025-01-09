<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $DirectoryListingOptimization
 */
class S3StorageOptions extends Shape
{
    /**
     * @param array{DirectoryListingOptimization?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
