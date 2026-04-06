<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $DirectoryListingOptimization
 */
class S3StorageOptions extends Shape
{
    /**
     * @param array{DirectoryListingOptimization?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
