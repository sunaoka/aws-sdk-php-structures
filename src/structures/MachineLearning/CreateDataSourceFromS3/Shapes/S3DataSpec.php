<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromS3\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataLocationS3
 * @property string|null $DataRearrangement
 * @property string|null $DataSchema
 * @property string|null $DataSchemaLocationS3
 */
class S3DataSpec extends Shape
{
    /**
     * @param array{
     *     DataLocationS3: string,
     *     DataRearrangement?: string|null,
     *     DataSchema?: string|null,
     *     DataSchemaLocationS3?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
