<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableSecurityHubFeatureV2;

trait EnableSecurityHubFeatureV2Trait
{
    /**
     * @param EnableSecurityHubFeatureV2Request $args
     * @return EnableSecurityHubFeatureV2Response
     */
    public function enableSecurityHubFeatureV2(EnableSecurityHubFeatureV2Request $args)
    {
        $result = parent::enableSecurityHubFeatureV2($args->toArray());
        return new EnableSecurityHubFeatureV2Response($result->toArray());
    }
}
