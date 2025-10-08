<?php

namespace Sunaoka\Aws\Structures\VoiceID\DescribeFraudster;

trait DescribeFraudsterTrait
{
    /**
     * @param DescribeFraudsterRequest $args
     * @return DescribeFraudsterResponse
     */
    public function describeFraudster(DescribeFraudsterRequest $args)
    {
        $result = parent::describeFraudster($args->toArray());
        return new DescribeFraudsterResponse($result->toArray());
    }
}
