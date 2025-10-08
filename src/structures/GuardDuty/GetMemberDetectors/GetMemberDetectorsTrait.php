<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetMemberDetectors;

trait GetMemberDetectorsTrait
{
    /**
     * @param GetMemberDetectorsRequest $args
     * @return GetMemberDetectorsResponse
     */
    public function getMemberDetectors(GetMemberDetectorsRequest $args)
    {
        $result = parent::getMemberDetectors($args->toArray());
        return new GetMemberDetectorsResponse($result->toArray());
    }
}
