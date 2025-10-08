<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DeleteQueuedSavingsPlan;

trait DeleteQueuedSavingsPlanTrait
{
    /**
     * @param DeleteQueuedSavingsPlanRequest $args
     * @return DeleteQueuedSavingsPlanResponse
     */
    public function deleteQueuedSavingsPlan(DeleteQueuedSavingsPlanRequest $args)
    {
        $result = parent::deleteQueuedSavingsPlan($args->toArray());
        return new DeleteQueuedSavingsPlanResponse($result->toArray());
    }
}
