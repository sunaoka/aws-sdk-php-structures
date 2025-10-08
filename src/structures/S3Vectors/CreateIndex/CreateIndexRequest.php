<?php

namespace Sunaoka\Aws\Structures\S3Vectors\CreateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $vectorBucketName
 * @property string|null $vectorBucketArn
 * @property string $indexName
 * @property 'float32' $dataType
 * @property int<1, 4096> $dimension
 * @property 'euclidean'|'cosine' $distanceMetric
 * @property Shapes\MetadataConfiguration|null $metadataConfiguration
 */
class CreateIndexRequest extends Request
{
    /**
     * @param array{
     *     vectorBucketName?: string|null,
     *     vectorBucketArn?: string|null,
     *     indexName: string,
     *     dataType: 'float32',
     *     dimension: int<1, 4096>,
     *     distanceMetric: 'euclidean'|'cosine',
     *     metadataConfiguration?: Shapes\MetadataConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
