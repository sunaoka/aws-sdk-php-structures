<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHyperParameterTuningJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataSource|null $S3DataSource
 * @property FileSystemDataSource|null $FileSystemDataSource
 * @property DatasetSource|null $DatasetSource
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataSource?: S3DataSource|null,
     *     FileSystemDataSource?: FileSystemDataSource|null,
     *     DatasetSource?: DatasetSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
