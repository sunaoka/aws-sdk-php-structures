<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneTier;

trait UpdateHostedZoneTierTrait
{
    /**
     * @param UpdateHostedZoneTierRequest $args
     * @return UpdateHostedZoneTierResponse
     */
    public function updateHostedZoneTier(UpdateHostedZoneTierRequest $args)
    {
        $result = parent::updateHostedZoneTier($args->toArray());
        return new UpdateHostedZoneTierResponse($result->toArray());
    }
}
