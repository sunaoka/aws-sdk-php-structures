<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\PutScheduledAction;

trait PutScheduledActionTrait
{
    /**
     * @param PutScheduledActionRequest $args
     * @return PutScheduledActionResponse
     */
    public function putScheduledAction(PutScheduledActionRequest $args)
    {
        $result = parent::putScheduledAction($args->toArray());
        return new PutScheduledActionResponse($result->toArray());
    }
}
