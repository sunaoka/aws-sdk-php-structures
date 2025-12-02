<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vectorBucketName
 * @property string $indexName
 * @property string $indexArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'float32' $dataType
 * @property int<1, 4096> $dimension
 * @property 'euclidean'|'cosine' $distanceMetric
 * @property MetadataConfiguration|null $metadataConfiguration
 * @property EncryptionConfiguration|null $encryptionConfiguration
 */
class Index extends Shape
{
    /**
     * @param array{
     *     vectorBucketName: string,
     *     indexName: string,
     *     indexArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     dataType: 'float32',
     *     dimension: int<1, 4096>,
     *     distanceMetric: 'euclidean'|'cosine',
     *     metadataConfiguration?: MetadataConfiguration|null,
     *     encryptionConfiguration?: EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
