<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DisableSecurityHubV2;

trait DisableSecurityHubV2Trait
{
    /**
     * @param DisableSecurityHubV2Request $args
     * @return DisableSecurityHubV2Response
     */
    public function disableSecurityHubV2(DisableSecurityHubV2Request $args)
    {
        $result = parent::disableSecurityHubV2($args->toArray());
        return new DisableSecurityHubV2Response($result->toArray());
    }
}
