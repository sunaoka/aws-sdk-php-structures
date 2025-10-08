<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateEventLabel;

trait UpdateEventLabelTrait
{
    /**
     * @param UpdateEventLabelRequest $args
     * @return UpdateEventLabelResponse
     */
    public function updateEventLabel(UpdateEventLabelRequest $args)
    {
        $result = parent::updateEventLabel($args->toArray());
        return new UpdateEventLabelResponse($result->toArray());
    }
}
