<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutions;

trait ListTestExecutionsTrait
{
    /**
     * @param ListTestExecutionsRequest $args
     * @return ListTestExecutionsResponse
     */
    public function listTestExecutions(ListTestExecutionsRequest $args)
    {
        $result = parent::listTestExecutions($args->toArray());
        return new ListTestExecutionsResponse($result->toArray());
    }
}
