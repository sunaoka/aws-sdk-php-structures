<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListAccessControlApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalIdpPublicAuthCodeAuthorizingConfig|null $ExternalIdpPublicAuthCode
 * @property ExternalIdpConfidentialAuthCodeAuthorizingConfigSummary|null $ExternalIdpConfidentialAuthCode
 */
class IdpAuthorizingConfigurationSummaryDetail extends Shape
{
    /**
     * @param array{
     *     ExternalIdpPublicAuthCode?: ExternalIdpPublicAuthCodeAuthorizingConfig|null,
     *     ExternalIdpConfidentialAuthCode?: ExternalIdpConfidentialAuthCodeAuthorizingConfigSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
