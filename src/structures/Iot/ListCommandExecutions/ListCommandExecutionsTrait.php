<?php

namespace Sunaoka\Aws\Structures\Iot\ListCommandExecutions;

trait ListCommandExecutionsTrait
{
    /**
     * @param ListCommandExecutionsRequest $args
     * @return ListCommandExecutionsResponse
     */
    public function listCommandExecutions(ListCommandExecutionsRequest $args)
    {
        $result = parent::listCommandExecutions($args->toArray());
        return new ListCommandExecutionsResponse($result->toArray());
    }
}
