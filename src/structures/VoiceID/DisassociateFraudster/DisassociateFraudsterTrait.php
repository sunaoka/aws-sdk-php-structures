<?php

namespace Sunaoka\Aws\Structures\VoiceID\DisassociateFraudster;

trait DisassociateFraudsterTrait
{
    /**
     * @param DisassociateFraudsterRequest $args
     * @return DisassociateFraudsterResponse
     */
    public function disassociateFraudster(DisassociateFraudsterRequest $args)
    {
        $result = parent::disassociateFraudster($args->toArray());
        return new DisassociateFraudsterResponse($result->toArray());
    }
}
