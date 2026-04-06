<?php

namespace Sunaoka\Aws\Structures\CleanRooms\PreviewPrivacyImpact;

trait PreviewPrivacyImpactTrait
{
    /**
     * @param PreviewPrivacyImpactRequest $args
     * @return PreviewPrivacyImpactResponse
     */
    public function previewPrivacyImpact(PreviewPrivacyImpactRequest $args)
    {
        $result = parent::previewPrivacyImpact($args->toArray());
        return new PreviewPrivacyImpactResponse($result->toArray());
    }
}
