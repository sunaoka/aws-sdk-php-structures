<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property 'S3Prefix'|'S3Object' $S3DataType
 * @property 'None'|'Gzip' $CompressionType
 * @property ModelAccessConfig|null $ModelAccessConfig
 * @property InferenceHubAccessConfig|null $HubAccessConfig
 * @property string|null $ManifestS3Uri
 * @property string|null $ETag
 * @property string|null $ManifestEtag
 */
class S3ModelDataSource extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     S3DataType: 'S3Prefix'|'S3Object',
     *     CompressionType: 'None'|'Gzip',
     *     ModelAccessConfig?: ModelAccessConfig|null,
     *     HubAccessConfig?: InferenceHubAccessConfig|null,
     *     ManifestS3Uri?: string|null,
     *     ETag?: string|null,
     *     ManifestEtag?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
