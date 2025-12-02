<?php

namespace Sunaoka\Aws\Structures\S3Vectors;

class S3VectorsClient extends \Aws\S3Vectors\S3VectorsClient
{
    use CreateIndex\CreateIndexTrait;
    use CreateVectorBucket\CreateVectorBucketTrait;
    use DeleteIndex\DeleteIndexTrait;
    use DeleteVectorBucket\DeleteVectorBucketTrait;
    use DeleteVectorBucketPolicy\DeleteVectorBucketPolicyTrait;
    use DeleteVectors\DeleteVectorsTrait;
    use GetIndex\GetIndexTrait;
    use GetVectorBucket\GetVectorBucketTrait;
    use GetVectorBucketPolicy\GetVectorBucketPolicyTrait;
    use GetVectors\GetVectorsTrait;
    use ListIndexes\ListIndexesTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListVectorBuckets\ListVectorBucketsTrait;
    use ListVectors\ListVectorsTrait;
    use PutVectorBucketPolicy\PutVectorBucketPolicyTrait;
    use PutVectors\PutVectorsTrait;
    use QueryVectors\QueryVectorsTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
