<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddTrustStoreRevocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Bucket
 * @property string|null $S3Key
 * @property string|null $S3ObjectVersion
 * @property 'CRL'|null $RevocationType
 */
class RevocationContent extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string|null,
     *     S3Key?: string|null,
     *     S3ObjectVersion?: string|null,
     *     RevocationType?: 'CRL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
