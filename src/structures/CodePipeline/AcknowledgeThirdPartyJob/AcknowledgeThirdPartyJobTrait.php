<?php

namespace Sunaoka\Aws\Structures\CodePipeline\AcknowledgeThirdPartyJob;

trait AcknowledgeThirdPartyJobTrait
{
    /**
     * @param AcknowledgeThirdPartyJobRequest $args
     * @return AcknowledgeThirdPartyJobResponse
     */
    public function acknowledgeThirdPartyJob(AcknowledgeThirdPartyJobRequest $args)
    {
        $result = parent::acknowledgeThirdPartyJob($args->toArray());
        return new AcknowledgeThirdPartyJobResponse($result->toArray());
    }
}
