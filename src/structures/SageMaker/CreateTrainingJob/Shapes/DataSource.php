<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTrainingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataSource|null $S3DataSource
 * @property FileSystemDataSource|null $FileSystemDataSource
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataSource?: S3DataSource|null,
     *     FileSystemDataSource?: FileSystemDataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
