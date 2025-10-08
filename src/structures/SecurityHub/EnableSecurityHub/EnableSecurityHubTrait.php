<?php

namespace Sunaoka\Aws\Structures\SecurityHub\EnableSecurityHub;

trait EnableSecurityHubTrait
{
    /**
     * @param EnableSecurityHubRequest $args
     * @return EnableSecurityHubResponse
     */
    public function enableSecurityHub(EnableSecurityHubRequest $args)
    {
        $result = parent::enableSecurityHub($args->toArray());
        return new EnableSecurityHubResponse($result->toArray());
    }
}
