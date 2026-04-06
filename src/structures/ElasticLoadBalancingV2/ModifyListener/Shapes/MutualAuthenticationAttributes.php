<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Mode
 * @property string|null $TrustStoreArn
 * @property bool|null $IgnoreClientCertificateExpiry
 * @property 'active'|'removed'|null $TrustStoreAssociationStatus
 * @property 'on'|'off'|null $AdvertiseTrustStoreCaNames
 */
class MutualAuthenticationAttributes extends Shape
{
    /**
     * @param array{
     *     Mode?: string|null,
     *     TrustStoreArn?: string|null,
     *     IgnoreClientCertificateExpiry?: bool|null,
     *     TrustStoreAssociationStatus?: 'active'|'removed'|null,
     *     AdvertiseTrustStoreCaNames?: 'on'|'off'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
