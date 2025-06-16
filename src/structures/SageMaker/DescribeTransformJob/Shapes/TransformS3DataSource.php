<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ManifestFile'|'S3Prefix'|'AugmentedManifestFile'|'Converse' $S3DataType
 * @property string $S3Uri
 */
class TransformS3DataSource extends Shape
{
    /**
     * @param array{
     *     S3DataType: 'ManifestFile'|'S3Prefix'|'AugmentedManifestFile'|'Converse',
     *     S3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
