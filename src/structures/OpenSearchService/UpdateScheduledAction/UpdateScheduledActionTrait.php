<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateScheduledAction;

trait UpdateScheduledActionTrait
{
    /**
     * @param UpdateScheduledActionRequest $args
     * @return UpdateScheduledActionResponse
     */
    public function updateScheduledAction(UpdateScheduledActionRequest $args)
    {
        $result = parent::updateScheduledAction($args->toArray());
        return new UpdateScheduledActionResponse($result->toArray());
    }
}
