<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteOutcome;

trait DeleteOutcomeTrait
{
    /**
     * @param DeleteOutcomeRequest $args
     * @return DeleteOutcomeResponse
     */
    public function deleteOutcome(DeleteOutcomeRequest $args)
    {
        $result = parent::deleteOutcome($args->toArray());
        return new DeleteOutcomeResponse($result->toArray());
    }
}
