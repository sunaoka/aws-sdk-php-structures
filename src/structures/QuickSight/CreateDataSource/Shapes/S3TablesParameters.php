<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableBucketArn
 */
class S3TablesParameters extends Shape
{
    /**
     * @param array{TableBucketArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
