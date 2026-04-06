<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableSecurityHubV2;

trait EnableSecurityHubV2Trait
{
    /**
     * @param EnableSecurityHubV2Request $args
     * @return EnableSecurityHubV2Response
     */
    public function enableSecurityHubV2(EnableSecurityHubV2Request $args)
    {
        $result = parent::enableSecurityHubV2($args->toArray());
        return new EnableSecurityHubV2Response($result->toArray());
    }
}
