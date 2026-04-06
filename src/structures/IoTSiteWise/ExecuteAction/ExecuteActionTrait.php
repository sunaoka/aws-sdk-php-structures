<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ExecuteAction;

trait ExecuteActionTrait
{
    /**
     * @param ExecuteActionRequest $args
     * @return ExecuteActionResponse
     */
    public function executeAction(ExecuteActionRequest $args)
    {
        $result = parent::executeAction($args->toArray());
        return new ExecuteActionResponse($result->toArray());
    }
}
