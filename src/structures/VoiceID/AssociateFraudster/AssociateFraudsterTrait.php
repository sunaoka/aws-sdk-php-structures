<?php

namespace Sunaoka\Aws\Structures\VoiceID\AssociateFraudster;

trait AssociateFraudsterTrait
{
    /**
     * @param AssociateFraudsterRequest $args
     * @return AssociateFraudsterResponse
     */
    public function associateFraudster(AssociateFraudsterRequest $args)
    {
        $result = parent::associateFraudster($args->toArray());
        return new AssociateFraudsterResponse($result->toArray());
    }
}
