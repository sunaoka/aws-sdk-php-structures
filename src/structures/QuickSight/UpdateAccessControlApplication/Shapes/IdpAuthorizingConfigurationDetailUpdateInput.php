<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalIdpPublicAuthCodeAuthorizingConfig|null $ExternalIdpPublicAuthCode
 * @property ExternalIdpConfidentialAuthCodeAuthorizingConfigUpdateInput|null $ExternalIdpConfidentialAuthCode
 */
class IdpAuthorizingConfigurationDetailUpdateInput extends Shape
{
    /**
     * @param array{
     *     ExternalIdpPublicAuthCode?: ExternalIdpPublicAuthCodeAuthorizingConfig|null,
     *     ExternalIdpConfidentialAuthCode?: ExternalIdpConfidentialAuthCodeAuthorizingConfigUpdateInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
