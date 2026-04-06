<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\PutProfileVisibility;

trait PutProfileVisibilityTrait
{
    /**
     * @param PutProfileVisibilityRequest $args
     * @return PutProfileVisibilityResponse
     */
    public function putProfileVisibility(PutProfileVisibilityRequest $args)
    {
        $result = parent::putProfileVisibility($args->toArray());
        return new PutProfileVisibilityResponse($result->toArray());
    }
}
