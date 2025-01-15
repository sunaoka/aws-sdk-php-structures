<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3Object'|'S3Prefix' $S3DataType
 * @property string $S3Uri
 * @property 'None'|'Gzip'|null $CompressionType
 * @property string|null $ETag
 */
class AdditionalS3DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataType: 'S3Object'|'S3Prefix',
     *     S3Uri: string,
     *     CompressionType?: 'None'|'Gzip'|null,
     *     ETag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
