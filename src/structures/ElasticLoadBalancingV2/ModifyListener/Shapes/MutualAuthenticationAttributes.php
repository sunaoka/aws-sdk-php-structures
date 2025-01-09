<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Mode
 * @property string $TrustStoreArn
 * @property bool $IgnoreClientCertificateExpiry
 * @property 'active'|'removed' $TrustStoreAssociationStatus
 * @property 'on'|'off' $AdvertiseTrustStoreCaNames
 */
class MutualAuthenticationAttributes extends Shape
{
    /**
     * @param array{
     *     Mode?: string,
     *     TrustStoreArn?: string,
     *     IgnoreClientCertificateExpiry?: bool,
     *     TrustStoreAssociationStatus?: 'active'|'removed',
     *     AdvertiseTrustStoreCaNames?: 'on'|'off'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
