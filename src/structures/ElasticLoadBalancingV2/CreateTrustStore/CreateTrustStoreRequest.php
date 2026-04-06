<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $CaCertificatesBundleS3Bucket
 * @property string $CaCertificatesBundleS3Key
 * @property string|null $CaCertificatesBundleS3ObjectVersion
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CaCertificatesBundleS3Bucket: string,
     *     CaCertificatesBundleS3Key: string,
     *     CaCertificatesBundleS3ObjectVersion?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
