<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListActionExecutions;

trait ListActionExecutionsTrait
{
    /**
     * @param ListActionExecutionsRequest $args
     * @return ListActionExecutionsResponse
     */
    public function listActionExecutions(ListActionExecutionsRequest $args)
    {
        $result = parent::listActionExecutions($args->toArray());
        return new ListActionExecutionsResponse($result->toArray());
    }
}
