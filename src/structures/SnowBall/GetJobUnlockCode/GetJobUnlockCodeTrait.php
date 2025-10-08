<?php

namespace Sunaoka\Aws\Structures\SnowBall\GetJobUnlockCode;

trait GetJobUnlockCodeTrait
{
    /**
     * @param GetJobUnlockCodeRequest $args
     * @return GetJobUnlockCodeResponse
     */
    public function getJobUnlockCode(GetJobUnlockCodeRequest $args)
    {
        $result = parent::getJobUnlockCode($args->toArray());
        return new GetJobUnlockCodeResponse($result->toArray());
    }
}
