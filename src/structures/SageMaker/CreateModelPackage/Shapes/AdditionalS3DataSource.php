<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3Object'|'S3Prefix' $S3DataType
 * @property string $S3Uri
 * @property 'None'|'Gzip' $CompressionType
 * @property string $ETag
 */
class AdditionalS3DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataType: 'S3Object'|'S3Prefix',
     *     S3Uri: string,
     *     CompressionType?: 'None'|'Gzip',
     *     ETag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
