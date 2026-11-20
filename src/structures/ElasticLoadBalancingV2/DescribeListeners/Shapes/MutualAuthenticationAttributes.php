<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeListeners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Mode
 * @property string|null $TrustStoreArn
 * @property bool|null $IgnoreClientCertificateExpiry
 * @property 'active'|'removed'|null $TrustStoreAssociationStatus
 * @property 'on'|'off'|null $AdvertiseTrustStoreCaNames
 * @property list<ClientCertificateIdentityFilter>|null $ClientCertificateIdentityFilters
 */
class MutualAuthenticationAttributes extends Shape
{
    /**
     * @param array{
     *     Mode?: string|null,
     *     TrustStoreArn?: string|null,
     *     IgnoreClientCertificateExpiry?: bool|null,
     *     TrustStoreAssociationStatus?: 'active'|'removed'|null,
     *     AdvertiseTrustStoreCaNames?: 'on'|'off'|null,
     *     ClientCertificateIdentityFilters?: list<ClientCertificateIdentityFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
