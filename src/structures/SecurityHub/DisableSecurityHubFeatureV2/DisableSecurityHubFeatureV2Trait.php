<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DisableSecurityHubFeatureV2;

trait DisableSecurityHubFeatureV2Trait
{
    /**
     * @param DisableSecurityHubFeatureV2Request $args
     * @return DisableSecurityHubFeatureV2Response
     */
    public function disableSecurityHubFeatureV2(DisableSecurityHubFeatureV2Request $args)
    {
        $result = parent::disableSecurityHubFeatureV2($args->toArray());
        return new DisableSecurityHubFeatureV2Response($result->toArray());
    }
}
