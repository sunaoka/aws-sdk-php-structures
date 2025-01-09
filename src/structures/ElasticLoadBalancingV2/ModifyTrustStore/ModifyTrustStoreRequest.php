<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property string $CaCertificatesBundleS3Bucket
 * @property string $CaCertificatesBundleS3Key
 * @property string $CaCertificatesBundleS3ObjectVersion
 */
class ModifyTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     CaCertificatesBundleS3Bucket: string,
     *     CaCertificatesBundleS3Key: string,
     *     CaCertificatesBundleS3ObjectVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
