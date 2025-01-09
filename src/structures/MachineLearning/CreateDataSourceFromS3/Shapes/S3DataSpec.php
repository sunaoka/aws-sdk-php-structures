<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataLocationS3
 * @property string $DataRearrangement
 * @property string $DataSchema
 * @property string $DataSchemaLocationS3
 */
class S3DataSpec extends Shape
{
    /**
     * @param array{
     *     DataLocationS3: string,
     *     DataRearrangement?: string,
     *     DataSchema?: string,
     *     DataSchemaLocationS3?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
