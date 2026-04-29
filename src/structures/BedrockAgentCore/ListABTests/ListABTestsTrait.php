<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListABTests;

trait ListABTestsTrait
{
    /**
     * @param ListABTestsRequest $args
     * @return ListABTestsResponse
     */
    public function listABTests(ListABTestsRequest $args)
    {
        $result = parent::listABTests($args->toArray());
        return new ListABTestsResponse($result->toArray());
    }
}
