<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueHoursOfOperation;

trait UpdateQueueHoursOfOperationTrait
{
    /**
     * @param UpdateQueueHoursOfOperationRequest $args
     * @return void
     */
    public function updateQueueHoursOfOperation(UpdateQueueHoursOfOperationRequest $args)
    {
        parent::updateQueueHoursOfOperation($args->toArray());
    }
}
