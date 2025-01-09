<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataSource $s3DataSource
 */
class ModelDataSource extends Shape
{
    /**
     * @param array{s3DataSource?: S3DataSource} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
