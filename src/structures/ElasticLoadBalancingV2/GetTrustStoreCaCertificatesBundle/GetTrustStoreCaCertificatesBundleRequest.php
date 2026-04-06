<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\GetTrustStoreCaCertificatesBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrustStoreArn
 */
class GetTrustStoreCaCertificatesBundleRequest extends Request
{
    /**
     * @param array{TrustStoreArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
