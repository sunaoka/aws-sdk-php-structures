<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutThirdPartyJobSuccessResult;

trait PutThirdPartyJobSuccessResultTrait
{
    /**
     * @param PutThirdPartyJobSuccessResultRequest $args
     * @return void
     */
    public function putThirdPartyJobSuccessResult(PutThirdPartyJobSuccessResultRequest $args)
    {
        parent::putThirdPartyJobSuccessResult($args->toArray());
    }
}
