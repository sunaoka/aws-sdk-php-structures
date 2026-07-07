<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DisableSecurityHubFeatureV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NETWORK_SCANNING' $FeatureName
 */
class DisableSecurityHubFeatureV2Request extends Request
{
    /**
     * @param array{FeatureName: 'NETWORK_SCANNING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
