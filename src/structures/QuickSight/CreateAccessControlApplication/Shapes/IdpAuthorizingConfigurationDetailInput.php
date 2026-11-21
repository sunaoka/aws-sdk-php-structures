<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalIdpPublicAuthCodeAuthorizingConfig|null $ExternalIdpPublicAuthCode
 * @property ExternalIdpConfidentialAuthCodeAuthorizingConfigInput|null $ExternalIdpConfidentialAuthCode
 */
class IdpAuthorizingConfigurationDetailInput extends Shape
{
    /**
     * @param array{
     *     ExternalIdpPublicAuthCode?: ExternalIdpPublicAuthCodeAuthorizingConfig|null,
     *     ExternalIdpConfidentialAuthCode?: ExternalIdpConfidentialAuthCodeAuthorizingConfigInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
