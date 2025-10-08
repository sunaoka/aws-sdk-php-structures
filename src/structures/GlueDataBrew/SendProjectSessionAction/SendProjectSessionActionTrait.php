<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\SendProjectSessionAction;

trait SendProjectSessionActionTrait
{
    /**
     * @param SendProjectSessionActionRequest $args
     * @return SendProjectSessionActionResponse
     */
    public function sendProjectSessionAction(SendProjectSessionActionRequest $args)
    {
        $result = parent::sendProjectSessionAction($args->toArray());
        return new SendProjectSessionActionResponse($result->toArray());
    }
}
