<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAccessControlApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalIdpPublicAuthCodeAuthorizingConfig|null $ExternalIdpPublicAuthCode
 * @property ExternalIdpConfidentialAuthCodeAuthorizingConfig|null $ExternalIdpConfidentialAuthCode
 */
class IdpAuthorizingConfigurationDetail extends Shape
{
    /**
     * @param array{
     *     ExternalIdpPublicAuthCode?: ExternalIdpPublicAuthCodeAuthorizingConfig|null,
     *     ExternalIdpConfidentialAuthCode?: ExternalIdpConfidentialAuthCodeAuthorizingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
