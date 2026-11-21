<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXTERNAL_IDP_PUBLIC_AUTH_CODE'|'EXTERNAL_IDP_CONFIDENTIAL_AUTH_CODE'|'QUICK_MANAGED_AUTH_CODE'|'IDC_AUTH_CODE' $IdpAuthorizingType
 * @property IdpAuthorizingConfigurationDetailInput|null $IdpAuthorizingConfigurationDetailInput
 * @property IdcTrustedTokenIssuerConfig|null $IdcTrustedTokenIssuerConfiguration
 */
class IdpAuthorizingConfigInput extends Shape
{
    /**
     * @param array{
     *     IdpAuthorizingType: 'EXTERNAL_IDP_PUBLIC_AUTH_CODE'|'EXTERNAL_IDP_CONFIDENTIAL_AUTH_CODE'|'QUICK_MANAGED_AUTH_CODE'|'IDC_AUTH_CODE',
     *     IdpAuthorizingConfigurationDetailInput?: IdpAuthorizingConfigurationDetailInput|null,
     *     IdcTrustedTokenIssuerConfiguration?: IdcTrustedTokenIssuerConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
