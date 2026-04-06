<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'S3Prefix'|'S3Object' $S3DataType
 * @property 'None'|'Gzip' $CompressionType
 */
class S3ModelDataSource extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     S3DataType: 'S3Prefix'|'S3Object',
     *     CompressionType: 'None'|'Gzip'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
