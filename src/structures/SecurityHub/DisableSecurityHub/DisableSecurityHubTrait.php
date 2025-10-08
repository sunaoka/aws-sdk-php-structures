<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DisableSecurityHub;

trait DisableSecurityHubTrait
{
    /**
     * @param DisableSecurityHubRequest $args
     * @return DisableSecurityHubResponse
     */
    public function disableSecurityHub(DisableSecurityHubRequest $args)
    {
        $result = parent::disableSecurityHub($args->toArray());
        return new DisableSecurityHubResponse($result->toArray());
    }
}
