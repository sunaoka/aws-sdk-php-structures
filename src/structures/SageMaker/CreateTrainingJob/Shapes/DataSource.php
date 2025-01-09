<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataSource $S3DataSource
 * @property FileSystemDataSource $FileSystemDataSource
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataSource?: S3DataSource,
     *     FileSystemDataSource?: FileSystemDataSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
