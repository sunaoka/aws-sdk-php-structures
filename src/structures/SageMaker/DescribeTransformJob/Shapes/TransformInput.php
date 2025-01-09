<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TransformDataSource $DataSource
 * @property string $ContentType
 * @property 'None'|'Gzip' $CompressionType
 * @property 'None'|'Line'|'RecordIO'|'TFRecord' $SplitType
 */
class TransformInput extends Shape
{
    /**
     * @param array{
     *     DataSource: TransformDataSource,
     *     ContentType?: string,
     *     CompressionType?: 'None'|'Gzip',
     *     SplitType?: 'None'|'Line'|'RecordIO'|'TFRecord'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
