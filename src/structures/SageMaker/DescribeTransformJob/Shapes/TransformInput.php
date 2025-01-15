<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TransformDataSource $DataSource
 * @property string|null $ContentType
 * @property 'None'|'Gzip'|null $CompressionType
 * @property 'None'|'Line'|'RecordIO'|'TFRecord'|null $SplitType
 */
class TransformInput extends Shape
{
    /**
     * @param array{
     *     DataSource: TransformDataSource,
     *     ContentType?: string|null,
     *     CompressionType?: 'None'|'Gzip'|null,
     *     SplitType?: 'None'|'Line'|'RecordIO'|'TFRecord'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
