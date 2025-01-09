<?php

namespace Sunaoka\Aws\Structures\SageMaker\BatchDescribeModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'S3Prefix'|'S3Object' $S3DataType
 * @property 'None'|'Gzip' $CompressionType
 * @property ModelAccessConfig $ModelAccessConfig
 * @property InferenceHubAccessConfig $HubAccessConfig
 * @property string $ManifestS3Uri
 * @property string $ETag
 * @property string $ManifestEtag
 */
class S3ModelDataSource extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     S3DataType: 'S3Prefix'|'S3Object',
     *     CompressionType: 'None'|'Gzip',
     *     ModelAccessConfig?: ModelAccessConfig,
     *     HubAccessConfig?: InferenceHubAccessConfig,
     *     ManifestS3Uri?: string,
     *     ETag?: string,
     *     ManifestEtag?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
