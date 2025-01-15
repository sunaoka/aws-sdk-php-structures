<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 * @property string $CaCertificatesBundleS3Bucket
 * @property string $CaCertificatesBundleS3Key
 * @property string|null $CaCertificatesBundleS3ObjectVersion
 */
class ModifyTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     TrustStoreArn: string,
     *     CaCertificatesBundleS3Bucket: string,
     *     CaCertificatesBundleS3Key: string,
     *     CaCertificatesBundleS3ObjectVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
