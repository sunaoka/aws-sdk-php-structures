<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListTestExecutionResultItems;

trait ListTestExecutionResultItemsTrait
{
    /**
     * @param ListTestExecutionResultItemsRequest $args
     * @return ListTestExecutionResultItemsResponse
     */
    public function listTestExecutionResultItems(ListTestExecutionResultItemsRequest $args)
    {
        $result = parent::listTestExecutionResultItems($args->toArray());
        return new ListTestExecutionResultItemsResponse($result->toArray());
    }
}
