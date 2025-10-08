<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutThirdPartyJobFailureResult;

trait PutThirdPartyJobFailureResultTrait
{
    /**
     * @param PutThirdPartyJobFailureResultRequest $args
     * @return void
     */
    public function putThirdPartyJobFailureResult(PutThirdPartyJobFailureResultRequest $args)
    {
        parent::putThirdPartyJobFailureResult($args->toArray());
    }
}
