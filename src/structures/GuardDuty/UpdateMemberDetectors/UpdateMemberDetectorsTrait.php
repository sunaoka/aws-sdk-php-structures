<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateMemberDetectors;

trait UpdateMemberDetectorsTrait
{
    /**
     * @param UpdateMemberDetectorsRequest $args
     * @return UpdateMemberDetectorsResponse
     */
    public function updateMemberDetectors(UpdateMemberDetectorsRequest $args)
    {
        $result = parent::updateMemberDetectors($args->toArray());
        return new UpdateMemberDetectorsResponse($result->toArray());
    }
}
