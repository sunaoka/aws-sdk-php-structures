<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXTERNAL_IDP_PUBLIC_AUTH_CODE'|'EXTERNAL_IDP_CONFIDENTIAL_AUTH_CODE'|'QUICK_MANAGED_AUTH_CODE'|'IDC_AUTH_CODE' $IdpAuthorizingType
 * @property IdpAuthorizingConfigurationDetail|null $IdpAuthorizingConfigurationDetail
 * @property IdcTrustedTokenIssuerConfig|null $IdcTrustedTokenIssuerConfiguration
 */
class IdpAuthorizingConfig extends Shape
{
    /**
     * @param array{
     *     IdpAuthorizingType: 'EXTERNAL_IDP_PUBLIC_AUTH_CODE'|'EXTERNAL_IDP_CONFIDENTIAL_AUTH_CODE'|'QUICK_MANAGED_AUTH_CODE'|'IDC_AUTH_CODE',
     *     IdpAuthorizingConfigurationDetail?: IdpAuthorizingConfigurationDetail|null,
     *     IdcTrustedTokenIssuerConfiguration?: IdcTrustedTokenIssuerConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
