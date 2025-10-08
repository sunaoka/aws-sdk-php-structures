<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyInstancesByHostedZone;

trait ListTrafficPolicyInstancesByHostedZoneTrait
{
    /**
     * @param ListTrafficPolicyInstancesByHostedZoneRequest $args
     * @return ListTrafficPolicyInstancesByHostedZoneResponse
     */
    public function listTrafficPolicyInstancesByHostedZone(ListTrafficPolicyInstancesByHostedZoneRequest $args)
    {
        $result = parent::listTrafficPolicyInstancesByHostedZone($args->toArray());
        return new ListTrafficPolicyInstancesByHostedZoneResponse($result->toArray());
    }
}
