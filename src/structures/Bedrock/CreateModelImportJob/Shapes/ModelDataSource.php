<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateModelImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataSource|null $s3DataSource
 */
class ModelDataSource extends Shape
{
    /**
     * @param array{s3DataSource?: S3DataSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
