<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableSecurityHubFeatureV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NETWORK_SCANNING' $FeatureName
 */
class EnableSecurityHubFeatureV2Request extends Request
{
    /**
     * @param array{FeatureName: 'NETWORK_SCANNING'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
