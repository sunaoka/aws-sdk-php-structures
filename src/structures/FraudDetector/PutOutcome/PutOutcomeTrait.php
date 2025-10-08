<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutOutcome;

trait PutOutcomeTrait
{
    /**
     * @param PutOutcomeRequest $args
     * @return PutOutcomeResponse
     */
    public function putOutcome(PutOutcomeRequest $args)
    {
        $result = parent::putOutcome($args->toArray());
        return new PutOutcomeResponse($result->toArray());
    }
}
